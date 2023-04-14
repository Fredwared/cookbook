<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\{Auth\LoginRequest, Auth\RegisterRequest, Auth\ResendCodeRequest, Auth\VerifyUserRequest};
use App\Http\Resources\{V1\Auth\LoginResource, V1\Auth\RegisterResource};
use App\Models\User;
use App\Services\{Auth\RegisterService};
use Exception;
use Illuminate\Http\{JsonResponse, Request};
use Illuminate\Validation\ValidationException;


/**
 *
 * APIs to register,login adn logout users
 *
 */
class AuthController extends Controller
{
    /**
     * User Register
     *
     * This endpoint will allow to register users
     *
     * @bodyParam firstname string  required Firstname of user. Example: Avaz
     * @bodyParam lastname string  required  Lastname of user. Example: Akhmedov
     * @bodyParam surname string  nullable  Surname of user. Example: Something
     * @bodyParam gender string  nullable  Gender of user. Example: male or female
     * @bodyParam birthdate date  nullable  Birthdate of user.Example:1997.02.09
     * @bodyParam country_id  required constrained   Country of user.Example:Uzbekistan
     * @bodyParam country_id  nullable constrained  City of user.Example:Tashkent
     * @bodyParam primary_number  string  required  Main number of user. Example: 99877822112
     * @bodyParam number string  required  Second number of user. Example: 99822133211
     * @bodyParam optional_number string  nullable  Optional number of user. Example: 53121213123
     * @bodyParam email  email required unique Email of user. Example: admin@gmail.com
     * @bodyParam preferred_contact_method Preferred method of user to contact.Default email
     * @bodyParam password  required Password of user. Example: 123asd2
     * @bodyParam password_confirmation required Confirm previous password. Example: 123asd2
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     *
     * @param RegisterRequest $request
     * @param RegisterService $registerService
     * @return JsonResponse
     *
     *
     */
    public function register(RegisterRequest $request, RegisterService $registerService): JsonResponse
    {

        $code = rand(100000, 999999);
        $registerService->registerUser($request->validated(), $code);


        return response()->json([
            "message" => "Pincode was sent",
            "pincode" => $code,
        ]);
    }


    /**
     * Verify User
     *
     * This endpoint will verify user and save him to database
     *
     * @bodyParam code required.
     *
     * @apiResource App\Http\Resources\V1\Auth\RegisterResource
     * @apiResourceModel App\Models\User
     *
     * @apiResourceModel
     * @param VerifyUserRequest $request
     * @param RegisterService $registerService
     * @return JsonResponse
     * @throws ValidationException
     *
     * @header Content-Type application/json
     * @header Accept application/json
     */
    public function verify(VerifyUserRequest $request, RegisterService $registerService): JsonResponse
    {

        $user = $registerService->verifyUser($request->validated());


        return response()->json(
            [
                "message" => "Successfully verified",
                "data" => RegisterResource::make($user)
            ]
        );

    }


    /**
     * Resend code to the user
     *
     * This endpoint will send new code to the user by deleting previous one
     *
     * @bodyParam number required.Exists in users primary_number column.Example:9987872133
     *
     * @param ResendCodeRequest $request
     * @param RegisterService $registerService
     * @return JsonResponse
     * @throws Exception
     */
    public function resend(ResendCodeRequest $request, RegisterService $registerService): JsonResponse
    {
        $code = rand(100000, 999999);

        $registerService->resendVerificationCode($request->validated(), $code);


        return response()->json([
            "message" => "Code resend successfully",
            "pincode" => $code,
        ]);
    }

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
     *
     */

    public function login(LoginRequest $request): JsonResponse
    {
        $request->authenticate();
        $fields = $request->validated();

        $user = User::query()->where("email", $fields["email"])->first();

        $token = $user->createToken("authToken")->plainTextToken;

        return response()->json([
            "token" => $token,
            "message" => "Welcome back " . $user->firstname,
            "data" => LoginResource::make($user),
        ]);
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
    public
    function logout(Request $request): JsonResponse
    {

        $accessToken = $request->user()->currentAccessToken();

        $accessToken->delete();

        return response()->json([
            "message" => "User logged out"
        ]);
    }
}
