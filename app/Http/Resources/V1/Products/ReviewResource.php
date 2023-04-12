<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            "rating" => $this->rating,
            "body" => $this->content,
        ];
    }
}
