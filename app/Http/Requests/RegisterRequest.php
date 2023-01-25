<?php

namespace App\Http\Requests;

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
            "username" => "required|max:255",
            "email" => "required|email|max:255",
            "firstname" => "required|string|max:255",
            "lastname" => "required|string|max:255",
            "password" => "required|max:255",
            "password_confirmation => 'required|same:password"
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            "password" => bcrypt($this->password)
        ]);
    }
}
