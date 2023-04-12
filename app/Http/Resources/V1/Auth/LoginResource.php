<?php

namespace App\Http\Resources\V1\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{

    public function toArray($request): array
    {
        return
            [
                "username" => $this->username,
                "email" => $this->email,
                "firstname" => $this->firstname,
                "lastname" => $this->lastname,
                "avatar" => $this->getFirstMediaUrl("avatars")
            ];
    }
}
