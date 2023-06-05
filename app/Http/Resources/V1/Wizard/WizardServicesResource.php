<?php

namespace App\Http\Resources\V1\Wizard;

use Illuminate\Http\Resources\Json\JsonResource;

class WizardServicesResource extends JsonResource
{

    public function toArray($request): array
    {


        $data = collect($this->attributes)->map(function ($attribute) {
            return [
                "name" => $attribute["attribute"]["name"],
                "value" => $attribute["value"]
            ];
        });

        return [
            "services" => $data
        ];
    }
}
