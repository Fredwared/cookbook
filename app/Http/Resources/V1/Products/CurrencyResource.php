<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResource extends JsonResource
{

    public function toArray($request): array

    {
        return [
            "id" => $this['id'],
            "code" => $this['code'],
            "name" => $this['name'],
            "value" => $this['value'],
        ];
    }
}
