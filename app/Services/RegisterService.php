<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


class  RegisterService
{


    /**
     * @param array $validation
     * @return Model|Builder
     */
    public function __invoke(array $validation): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {

        $validation["password"] = bcrypt($validation["password"]);
        return User::query()->create($validation);

    }
}