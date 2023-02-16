<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{

    public function toArray($request)
    {
        return $this->getFullUrl();

    }
}
