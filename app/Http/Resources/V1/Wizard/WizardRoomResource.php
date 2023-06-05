<?php

namespace App\Http\Resources\V1\Wizard;

use App\Http\Resources\V1\Products\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class WizardRoomResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            "roomType" => $this->room_type,
            "isSmokingAllowed" => boolval($this->is_smoking_allowed),
            "bedType" => $this->bed_type,
            "bedCount" => $this->bed_count,
            "roomSize" => $this->room_size ?? "unknown",
            "price" => $this->price,
            "priceForResidents" => $this->price_for_residents,
            "images" => ImageResource::collection($this->images),
        ];
    }
}
