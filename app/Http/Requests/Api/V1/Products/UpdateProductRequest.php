<?php

namespace App\Http\Requests\Api\V1\Products;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            "brand_id" => "required|exists:brands,id",
            "description" => "required|string",
            "price" => "required|numeric",
            "images" => "nullable|array",
            "images.*" => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048"
        ];
    }
}
