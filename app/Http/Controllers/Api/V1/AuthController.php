<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Http\Requests\Api\V1\{
    LoginRequest,
    RegisterRequest
};

use App\Http\Resources\{
    LoginResource,
    RegisterResource
};

use App\Services\{
    RegisterService,
    LoginService
};

use Illuminate\Http\{
    JsonResponse,
    Request
};
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    /**
     * User Register
     *
     * @bodyParam username string required Username. Example: Admin
     * @bodyParam email  email required unique Email. Example: admin@gmail.com
     * @bodyParam firstname string  required max:255 Firstname. Example: Avaz
     * @bodyParam lastname string  required max:255 Lastname. Example: Akhmedov
     * @bodyParam password confirmed required max:255 Password. Example: 123asd2
     * @bodyParam password_confirmation required Password. Example: 123asd2
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     *
     * @param RegisterRequest $request
     * @param RegisterService $registerService
     * @return JsonResponse
     *
     * @response {
     *  "data" [
     *   "username": "Avaz",
     *   "email":"avaz@gmail.com",
     *   "firstname":"Avaz",
     *   "lastname":"Akhmedov"
     *  ],
     * "message":"User created successfully"
     *
     *  }
     */
    public function register(RegisterRequest $request, RegisterService $registerService): JsonResponse
    {
        $user = $registerService($request->validated());

        return response()->json([
            "data" => new RegisterResource($user),
            "message" => "User registered successfully"
        ]);
    }


    /**
     * User Login
     *
     * @bodyParam email  required exists:users,email Email. Example: admin@gmail.com
     * @bodyParam password required Password. Example: 123asd2
     *
     * @header Authorization/Type:Bearer Token
     * @header Accept application/json
     *
     * @param LoginRequest $request
     * @param LoginService $loginService
     * @return JsonResponse
     *
     * @throws ValidationException
     *
     * /**
     *
     */

    public function login(LoginRequest $request, LoginService $loginService): JsonResponse
    {
        $request->authenticate();
        $user = $loginService($request->validated());

        return response()->json([
            "token" => $user->createToken("authToken")->plainTextToken,
            "data" => new LoginResource($user),
            "message" => "Welcome back " . $user->username
        ]);
    }

    /**
     * User Logout
     *
     * @header Authorization/Type:Bearer Token
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {

        $accessToken = $request->user()->currentAccessToken();

        $accessToken->delete();

        return response()->json([
            "message" => "User logged out"
        ]);
    }
}
