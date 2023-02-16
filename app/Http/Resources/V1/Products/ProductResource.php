<?php

namespace App\Http\Resources\V1\Products;

use App\Http\Resources\ImageResource;
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
            "images" => ImageResource::collection($this->getMedia("images"))
        ];
    }
}
