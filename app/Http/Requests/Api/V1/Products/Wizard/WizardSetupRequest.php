<?php

namespace App\Http\Requests\Api\V1\Products\Wizard;

use Illuminate\Foundation\Http\FormRequest;

class WizardSetupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "category_id" => "required|exists:categories,id",
            "name" => "required|string",
            "description" => "required|string",
            "images" => "required|array",
            "images.*" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "postal_code" => "required|numeric",
            "location" => "required",
            "city_id" => "required|exists:cities,id",
            "country_id" => "required|exists:countries,id",
            "contacts" => "required|array",
            "contacts.*.name" => "required|string|max:100",
            "contacts.*.number" => "required|numeric|regex:/^[0-9 ]+$/",
            "rating" => "required|numeric|max:5|min:1"
        ];
    }
}
