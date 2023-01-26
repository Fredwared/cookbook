<?php

namespace App\Services;


use App\Models\User;


class  RegisterService
{


    public function __invoke($validation): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {

        $validation["password"] = bcrypt($validation["password"]);
        return User::query()->create($validation);

    }
}