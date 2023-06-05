<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributeResource extends JsonResource
{

    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "name" => $this->attributes->name,
            "value" => $this->value
        ];
    }
}
