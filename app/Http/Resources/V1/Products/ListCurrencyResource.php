<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ListCurrencyResource extends JsonResource
{


    public function toArray($request): array
    {
        return [
            "name" => $this['name'],
            "code" => $this['code'],
            "value" => $this['value']
        ];
    }
}
