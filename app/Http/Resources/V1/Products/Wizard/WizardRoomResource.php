<?php

namespace App\Http\Resources\V1\Products\Wizard;

use Illuminate\Http\Resources\Json\JsonResource;

class WizardRoomResource extends JsonResource
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
            "roomType" => $this->room_type,
            "isSmokingAllowed" => boolval($this->is_smoking_allowed),
            "bedType" => $this->bed_type,
            "bedCount" => $this->bed_count,
            "roomSize" => $this->room_size ?? "unknown",
            "price" => $this->price,
            "priceForResidents" => $this->price_for_residents
        ];
    }
}
