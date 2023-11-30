<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:shops|min:3|max:256',
            'address' => 'nullable|min:3|max:256',
            'piva' => 'max:11',
            'photo' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable'
        ];
    }
}
