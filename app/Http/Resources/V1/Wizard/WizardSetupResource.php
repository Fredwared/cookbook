<?php

namespace App\Http\Resources\V1\Wizard;

use App\Http\Resources\V1\Products\ImageResource;
use App\Http\Resources\V1\Products\ProductCategoryResource;
use App\Http\Resources\V1\Products\ProductContactResource;
use Illuminate\Http\Resources\Json\JsonResource;

class WizardSetupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->uuid,
            "name" => $this->name,
            "description" => $this->description,
            "category" => ProductCategoryResource::make($this->category),
            "country" => $this->country->name,
            "city" => $this->city->name,
            "postalCode" => $this->postal_code,
            "location" => $this->location,
            "images" => ImageResource::collection($this->images),
            "isPetAllowed" => boolval($this->is_pet_allowed),
            "rating" => $this->rating,
            "status" => $this->status,
            "contacts" => ProductContactResource::collection($this->contacts),

        ];
    }
}
