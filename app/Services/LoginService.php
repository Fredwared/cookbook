<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


class LoginService
{


    /**
     * @param array $request
     * @return Builder|Model
     */
    public function __invoke(array $request): \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
    {


        return User::query()->where("email", $request["email"])->first();
    }
}