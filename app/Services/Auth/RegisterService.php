<?php

namespace App\Services\Auth;


use App\Models\User;
use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


class  RegisterService
{
    use UploadFile;


    public function __invoke(array $validation): Model|Builder
    {

        $validation["password"] = bcrypt($validation["password"]);
        $user = User::query()->create($validation);
        $this->uploadAvatar($user);

        return $user;

    }
}