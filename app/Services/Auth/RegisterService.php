<?php

namespace App\Services\Auth;


use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;


class  RegisterService
{

    /**
     * @param array $validation
     * @param $code
     * @return mixed
     */
    public function registerUser(array $validation, $code): mixed
    {
        $validation["password"] = bcrypt($validation["password"]);


        Cache::put([
            'user_verification_code' => $code,
            'user' => $validation
        ], now()->addMinutes(10));

        return $code;
    }


    /**
     * @param array $validation
     * @return Model|Builder
     * @throws ValidationException
     */
    public function verifyUser(array $validation): Model|Builder
    {
        $user = Cache::get("user");

        $userCode = Cache::get("user_verification_code");

        if ($validation["code"] != $userCode) {
            throw ValidationException::withMessages([
                "code" => "Invalid code"
            ]);
        }

        return User::query()->create($user);

    }


    public function resendVerificationCode(array $validation, $code): bool
    {


    }
}