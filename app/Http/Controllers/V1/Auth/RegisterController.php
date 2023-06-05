<?php

namespace App\Http\Controllers\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\{Auth\ResendCodeRequest};
use App\Http\Requests\V1\Auth\RegisterRequest;
use App\Http\Requests\V1\Auth\VerifyUserRequest;
use App\Services\{Auth\RegisterService};
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


/**
 * @group Registration
 *
 * End points register users
 *
 */
class RegisterController extends Controller
{

    public RegisterService $registerService;

    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

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
     * @return  JsonResponse
     *
     * @responseFile storage/responses/auth/register.json
     *
     */
    public function register(RegisterRequest $request): JsonResponse
    {

        $code = rand(10000, 99999);
        $this->registerService->registerUser($request->validated(), $code);


        return response()->json([
            "message" => "Pincode was sent",
            "pincode" => $code,
        ], ResponseAlias::HTTP_OK);
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
     * @return JsonResponse
     * @throws ValidationException
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @responseFile storage/responses/auth/verify.json
     *
     */
    public function verify(VerifyUserRequest $request): JsonResponse
    {

        $user = $this->registerService->verifyUser($request->validated());

        $token = $user->createToken("register_token")->plainTextToken;


        return response()->json(
            [
                "token" => $token,
                "message" => "Successfully verified",
                "data" => $user
            ], ResponseAlias::HTTP_CREATED
        );

    }


    /**
     * Resend code to the user
     *
     * This endpoint will send new code to the user by deleting previous one
     *
     * @bodyParam number required.Exists in users primary_number column.Example:9987872133
     *
     */
    public function resend(ResendCodeRequest $request, RegisterService $registerService)
    {

    }

}
