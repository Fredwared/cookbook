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
            "country" => $this->country->name,
            "city" => $this->city->name,
            "location" => $this->location,
            "rating" => $this->rating,
            "postalCode" => $this->postal_code,
            "rooms" => ProductEntityResource::collection($this->whenLoaded("entities")),
            "services" => AttributeResource::collection($this->whenLoaded("attributes")),
            "contacts" => ProductContactResource::collection($this->whenLoaded("contacts")),
            "reviews" => ReviewResource::collection($this->whenLoaded('reviews')),
            "rate" => number_format($this->reviews->avg("rating"), 2, ","),
            "images" => ImageResource::collection($this->getMedia("place")),
            "isPetAllowed" => boolval($this->is_pet_allowed),
        ];
    }

}
