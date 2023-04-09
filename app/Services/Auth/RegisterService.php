<?php

namespace App\Services\Auth;


use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


class  RegisterService
{

    public function __invoke(array $validation): Model|Builder
    {
        $validation["password"] = bcrypt($validation["password"]);
        $user = User::query()->create($validation);


        event(new Registered($user));

        return $user;

    }
}