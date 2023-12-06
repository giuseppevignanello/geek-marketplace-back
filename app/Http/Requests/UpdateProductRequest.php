<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:256',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'photo' => 'max:256',
            'is_visible' => 'required|boolean',
            'prodcutor' => 'nullable|max:256'
        ];
    }
}
