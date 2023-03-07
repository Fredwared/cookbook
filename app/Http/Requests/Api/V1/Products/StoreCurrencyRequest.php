<?php

namespace App\Http\Requests\Api\V1\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurrencyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            "code" => "required|string|max:3|unique:currencies,code"
        ];
    }

}
