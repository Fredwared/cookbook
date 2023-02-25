<?php

namespace App\Services\Products;

use App\Models\Product;
use App\Traits\SyncAttributes;
use App\Traits\UploadFile;

class ProductService
{
    use UploadFile, SyncAttributes;


    public function storeProduct(array $validation): Product
    {


        $product = Product::query()->create($validation);

        $this->attachAttributes($product, $validation["attributes"]);
        $this->upload($product);

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


        $this->updateAttributes($product, $validation["attributes"]);


        if ($image) {
            $this->clearCollection($product, "images");
            $this->upload($product);
        }

        $product->update($validation);

        return $product;


    }

}