<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            "email" => "required|exists:users,email",
            "password" => "required"
        ];
    }


    /**
     * @throws ValidationException
     */
    public function authenticate() {
           if (!Auth::attempt($this->only("email","password"))) {

               throw ValidationException::withMessages([
                   'email' => __('auth.failed'),
               ]);

           }
       }

}
