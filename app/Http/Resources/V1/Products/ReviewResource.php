<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "body" => $this->content,
            "product_id" => $this->products->id
        ];
    }
}
