<?php

namespace App\Http\Controllers\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\LoginRequest;
use App\Http\Resources\V1\Auth\LoginResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


/**
 * @group Login and Logout
 *
 * End points to register and logout users
 *
 */
class LoginController extends Controller
{

    /**
     * User Login
     *
     * This endpoint will allow to log in users
     *
     * @bodyParam email  required Email of existing user. Example: admin@gmail.com
     * @bodyParam password required Password of existing user. Example: 123asd2
     *
     * @header Authorization Bearer {token}
     * @header Accept application/json
     *
     *
     * @param LoginRequest $request
     * @return JsonResponse
     *
     * @throws ValidationException
     *
     * @apiResource App\Http\Resources\V1\Auth\LoginResource
     * @apiResourceModel App\Models\User
     *
     * @responseFile storage/responses/auth/login.json
     *
     *
     */

    public function login(LoginRequest $request): JsonResponse
    {
        $request->authenticate();

        $user = $request->user();

        $token = $user->createToken("login_token")->plainTextToken;

        return response()->json([
            "token" => $token,
            "message" => "Welcome back " . $user->firstname,
            "data" => LoginResource::make($user),
        ], ResponseAlias::HTTP_OK);
    }

    /**
     * User Logout
     *
     * This endpoint will allow to log out users
     *
     * @header Authorization/Type:Bearer Token. Example: 44|cSi4RtDPHw6vjnqiR3oKUP1x963fj1VcW9fMLmUF
     *
     *
     * @param Request $request
     * @return JsonResponse
     *
     */
    public function logout(Request $request): JsonResponse
    {

        $accessToken = $request->user()->currentAccessToken();

        $accessToken->delete();

        return response()->json([
            "message" => "User logged out"
        ], ResponseAlias::HTTP_OK);
    }
}
