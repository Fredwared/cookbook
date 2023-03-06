<?php

namespace App\Services\Products;

use App\Models\Product;
use App\Traits\SyncAttributes;
use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductService
{
    use UploadFile, SyncAttributes;


    /**
     * @param array $validation
     * @return Model
     */
    public function storeProduct(array $validation): Model
    {

        $product = Product::query()->create($validation);

        DB::transaction(function () use ($validation, $product) {
            $this->attachAttributes($product, $validation["attributes"]);
            $this->upload($product, "images");
        });

        return $product;
    }

    /**
     * @param array $validation
     * @param Product $product
     * @param $image
     * @return Product
     */
    public function updateProduct(array $validation, Product $product, $image): Product
    {

        DB::transaction(function () use ($validation, $product, $image) {
            $this->updateAttributes($product, $validation["attributes"]);

            if ($image) {
                $this->clearCollection($product, "images");
                $this->upload($product);
            }
            $product->update($validation);
        });

        return $product;


    }

}