<?php

namespace App\Services\Auth;


use App\Http\Resources\V1\Auth\RegisterResource;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;


class  RegisterService
{

    /**
     *
     * @used \App\Http\Controllers\V1\Register\RegisterController
     * @method register
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
     *
     * @used \App\Http\Controllers\V1\verify\RegisterController
     * @method verify
     */
    public function verifyUser(array $validation): RegisterResource
    {
        $user = Cache::get("user");

        $userCode = Cache::get("user_verification_code");

        if ($validation["code"] != $userCode) {
            throw ValidationException::withMessages([
                "code" => "Invalid code"
            ]);
        }

        $data = User::query()->create($user);

        return RegisterResource::make($data);

    }

    /**
     *
     * @used \App\Http\Controllers\V1\Register\RegisterController
     * @method resend
     */
    public function resendVerificationCode(array $validation, $code): void
    {


    }
}