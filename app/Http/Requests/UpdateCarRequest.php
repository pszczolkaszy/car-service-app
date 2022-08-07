<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
    public function rules()
    {
        return [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'production_year' => 'required|date_format:Y',
            'registration_year' => 'required|date_format:Y',
            'vin' => 'required|string|max:255',
            'plate' => 'required|string|max:255',
        ];
    }
}
