<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCategoryResource extends JsonResource
{

    public function toArray($request): array
    {
        return[
            "id" => $this->id,
            "name" => $this->name
        ];
    }
}
