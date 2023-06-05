<?php

namespace App\Http\Resources\V1\Wizard;

use App\Http\Resources\V1\Products\AttributeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class WizardLivingResource extends JsonResource
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
            "living" => AttributeResource::collection($this->whenLoaded("attributes"))
        ];
    }
}
