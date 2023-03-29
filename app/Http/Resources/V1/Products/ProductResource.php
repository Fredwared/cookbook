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
            "reviews" => ReviewResource::collection($this->whenLoaded('reviews')),
            "price" => [
                "amount" => $this->currencyConvert(request('rate', 1), $this->price),
                "currencyCode" => request("currency","usd")
            ],
            "preview" => $this->images->where('custom_properties.is_main', '=', true)->first()?->getFullUrl(),
            "images" => ImageResource::collection($this->whenLoaded('images')),
            "attributes" => AttributeResource::collection($this->whenLoaded('attributes'))
        ];
    }

}
