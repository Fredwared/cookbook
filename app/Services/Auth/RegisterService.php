<?php

namespace App\Services\Auth;


use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


class  RegisterService
{


    /**
     * @param array $validation
     * @return Model|Builder
     */
    public function __invoke(array $validation): Model|Builder
    {

        $validation["password"] = bcrypt($validation["password"]);
        return User::query()->create($validation);

    }
}