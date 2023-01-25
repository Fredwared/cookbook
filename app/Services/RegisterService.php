<?php
namespace App\Services;


use App\Models\User;

class  RegisterService {

    public function __invoke( array $validation): \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
    {

        return User::query()->create($validation);

    }
}