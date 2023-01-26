<?php

namespace App\Services;

use App\Models\User;


class LoginService
{


    public function __invoke(array $request): \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
    {


        return User::query()->where("email", $request["email"])->first();
    }
}