<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray($request): array
    {

        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "category" => $this->category->name,
            "brand" => $this->brand->name,
            "price" => $this->price,
            "reviews" => ReviewResource::collection($this->reviews),
            "preview" => $this->getFirstMedia("images", ["is_main" => true])->original_url,
            "images" => ImageResource::collection($this->getMedia("images"))
        ];
    }


}
