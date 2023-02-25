<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            "username" => "required|max:255|unique:users",
            "email" => "required|email|max:255|unique:users",
            "firstname" => "required|string|max:255",
            "lastname" => "required|string|max:255",
            "password" => "required|max:255|confirmed",
        ];
    }


}
