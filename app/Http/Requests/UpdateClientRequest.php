<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'nip' => 'nullable|digits:10|unique:clients,nip',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'address_city' => 'required|string|max:255',
            'address_code' => 'required|string|max:255',
            'address_street' => 'required|string|max:255',
            'address_number' => 'required|string|max:255',
            'address_local' => 'nullable|string|max:255',
        ];
    }
}
