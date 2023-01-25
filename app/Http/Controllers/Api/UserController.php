<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegisterResource;
use App\Models\User;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(RegisterRequest $request,RegisterService $registerService): RegisterResource
    {
     $user =  $registerService($request->validated());
        return new RegisterResource($user);
    }

    public function login(LoginRequest $request): \Illuminate\Http\JsonResponse
    {
        try {
            $fields  = $request->validated();
            if (!$fields) {
                return response()->json([
                    "status" => false,
                    "message" => "Validation error",
                    "error" => $fields->errors()
                ], 401);
            }


            if (!Auth::attempt($fields)) {
                return response()->json([
                    "status" => false,
                    "message" => "Email or password does not match",
                ], 401);
            }


            $user = User::query()->where("email",$fields["email"])->first();
            return response()->json([
               "status" => true,
               "message" => "User logged in successfully",
               "token" =>  $user->createToken("AUTH TOKEN")->plainTextToken
            ],200);

        }
        catch (\Throwable $throwable) {
            return response()->json([
                "status" => false,
                "message" => $throwable->getMessage(),
            ], 500);
        }
    }
}
