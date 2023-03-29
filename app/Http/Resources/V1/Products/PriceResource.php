<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class PriceResource extends JsonResource
{

    public function toArray($request):array
    {
        return [
            "amount" => $this->price,
            "currency_code" => $request->currency
        ];

    }
}
