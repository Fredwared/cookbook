<?php

namespace App\Http\Resources\V1\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            "id" => $this->id,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "country" => $this->country->name,
            "primaryNumber" => $this->primary_number,
            "number" => $this->number,
            "email" => $this->email
        ];
    }
}
