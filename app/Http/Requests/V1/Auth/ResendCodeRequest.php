<?php

namespace App\Http\Requests\V1\Auth;

use App\Rules\UserVerified;
use Illuminate\Foundation\Http\FormRequest;

class ResendCodeRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "number" => ["required", "numeric", "regex:/^[0-9 ]+$/"]
        ];
    }
}
