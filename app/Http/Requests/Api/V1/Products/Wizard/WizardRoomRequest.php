<?php

namespace App\Http\Requests\Api\V1\Products\Wizard;

use Illuminate\Foundation\Http\FormRequest;

class WizardRoomRequest extends FormRequest
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
            "room_type" => "required",
            "is_smoking_allowed" => "sometimes|boolean",
            "bed_type" => "required",
            "bed_count" => "required|numeric|min:1",
            "room_size" => "nullable|numeric|min:1",
            "price" => "required|numeric|min:1",
            "price_for_residents" => "required|numeric|min:1"
        ];
    }
}
