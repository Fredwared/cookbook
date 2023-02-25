<?php

namespace App\Traits;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;

trait SyncAttributes
{

    /**
     * @param Product $product
     * @param array $attributes
     * @return void
     */
    public function attachAttributes(Product $product, array $attributes): void
    {


        $attributes = collect($attributes)->map(function ($item) use ($product) {

            $attribute = Attribute::query()->firstOrCreate(["name" => $item['name']]);

            AttributeValue::query()->firstOrCreate([
                "attribute_id" => $attribute->id,
                'value' => $item['value']
            ]);
            return [
                'attribute_id' => $attribute->id,
                'product_id' => $product->id
            ];
        });

        $product->attributes()->attach($attributes);


    }

    protected function updateAttributes(Product $product, array $attributes): void
    {


        $attributes = collect($attributes)->map(function ($item) use ($product) {


            if ($product->attributes()->exists()) {
                $product->attributes()->detach();
                $product->attributes()->delete();
            }
            $attribute = Attribute::query()->firstOrCreate(["name" => $item['name']]);

            if ($attribute->value()->exists()) {
                $attribute->value()->delete();
            }

            AttributeValue::query()->firstOrCreate([
                "attribute_id" => $attribute->id,
                'value' => $item['value']
            ]);
            return [
                'attribute_id' => $attribute->id,
                'product_id' => $product->id
            ];
        });

        $product->attributes()->sync($attributes);


    }


}