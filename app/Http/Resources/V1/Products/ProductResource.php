<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray($request): array
    {
        $currency = request("currency", $this->currency);
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "category" => [
                "id" => $this->category->id,
                "name" => $this->category->name
            ],
            "brand" => $this->brand->name,
            "price" => number_format(num: $this->price($currency), decimals: '2', thousands_separator: ' '),
            "reviews" => ReviewResource::collection($this->reviews),
            "preview" => $this->getFirstMedia("images", ["is_main" => true])?->original_url,
            "images" => ImageResource::collection($this->getMedia("images")),
            "attributes" => AttributeResource::collection($this->attributes)
        ];
    }


}
