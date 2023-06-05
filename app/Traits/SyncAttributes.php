<?php

namespace App\Traits;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Model;

trait SyncAttributes
{

    public function attachAttributes(array $attributes, Model $model): void
    {
        collect($attributes)->map(function (array $attributeData) use ($model) {

            $attribute = Attribute::query()->firstOrCreate([
                'name' => $attributeData['name']
            ]);

            $attribute->values()->create([
                "attribute_id" => $attribute->id,
                "value" => $attributeData["value"]
            ]);

            $model->attributes()->attach($attribute);

        });
    }

}