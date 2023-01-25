<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            "username" => $this->username,
            "email" => $this->email,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname
        ];
    }
}
