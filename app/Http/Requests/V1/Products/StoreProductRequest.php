<?php

namespace App\Http\Requests\V1\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required|string",
            "category_id" => "required|exists:categories,id",
            "description" => "required|string",
            "price" => "required|numeric",
            "images" => "required|array",
            "images.*" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "attributes" => "required|array",
            "attributes.*.name" => "required|string|max:100",
            "attributes.*.value" => "required|max:100"
        ];
    }
}
