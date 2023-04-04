<?php

namespace App\Http\Resources\V1\Products;

use App\Traits\CurrencyConverter;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    use CurrencyConverter;

    public function toArray($request): array
    {
        return [
            "id" => $this->uuid,
            "name" => $this->name,
            "description" => $this->description,
            "category" => ProductCategoryResource::make($this->whenLoaded('category')),
            "entities" =>EntityResource::collection($this->whenLoaded("entities")),
            "contacts" => ProductContactResource::collection($this->whenLoaded("contacts")),
            "city" => $this->city->name,
            "location" => $this->location,
            "reviews" => ReviewResource::collection($this->whenLoaded('reviews')),
            "images" => ImageResource::collection($this->whenLoaded('images')),
            "isPetAllowed" => boolval($this->is_pet_allowed),
        ];
    }

}
