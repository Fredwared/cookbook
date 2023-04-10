<?php

namespace App\Services\Auth;


use App\Models\User;
use App\Models\UserCode;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


class  RegisterService
{

    /**
     * @param array $validation
     * @param $code
     * @return Model|Builder
     */
    public function registerUser(array $validation, $code): Model|Builder
    {
        $validation["password"] = bcrypt($validation["password"]);
        $user = User::query()->create($validation);

        UserCode::query()->create([
            "user_id" => $user->id,
            "code" => $code
        ]);

        return $user;

    }


    /**
     * @param array $validation
     * @return void
     * @throws Exception
     */
    public function verifyUser(array $validation): void
    {
        $userCode = UserCode::query()
            ->where("user_id", $validation["user_id"])
            ->where("code", $validation["code"])
            ->first();

        if (!$userCode or $validation["code"] !== $userCode->code) {
            throw new Exception("Invalid code");
        }
        User::query()->find($validation["user_id"])->update([
            "is_verified" => true
        ]);
        $userCode->delete();
    }

    /**
     * @param array $validation
     * @param $code
     * @return Builder|Model
     * @throws Exception
     */
    public function resendVerificationCode(array $validation, $code): Builder|Model
    {
        $user = User::query()->where("primary_number", $validation["number"])->first();

        UserCode::query()->where("user_id", $validation["user_id"])->delete();

        if ($user->is_verified) {
            throw new Exception("User is verified");
        }

        return UserCode::query()->create([
            "user_id" => $user->id,
            "code" => $code
        ]);
    }
}