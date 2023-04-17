<?php

namespace App\Http\Requests\V1\Auth;

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
            "firstname" => "required|max:255|string",
            "lastname" => "required|max:255|string",
            "surname" => "max:255|string",
            "birthdate" => "date",
            "country_id" => "required|exists:countries,id",
            "city_id" => "exists:countries,id",
            "primary_number" => "required|numeric|regex:/^[0-9 ]+$/|unique:users,primary_number",
            "number" => "required|numeric|regex:/^[0-9 ]+$/||unique:users,number",
            "optional_number" => "numeric|regex:/^[0-9 ]+$/",
            "email" => "required|email|unique:users,email",
            "password" => 'required|min:6',
            "password_confirmation" => 'required|same:password',
        ];
    }


}
