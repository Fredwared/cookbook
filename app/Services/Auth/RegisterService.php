<?php

namespace App\Services\Auth;


use App\Http\Resources\V1\Auth\RegisterResource;
use App\Models\User;
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
     * @return RegisterResource
     * @throws ValidationException
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


    public function resendVerificationCode(array $validation, $code): void
    {


    }
}