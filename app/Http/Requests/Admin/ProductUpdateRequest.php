<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['nullable', 'image', 'max:3000'],
            'name' => ['required', 'max:255'],
            'category' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'short_description' => ['required', 'max:2000'],
            'show_at_home' => ['boolean'],
            'status' => ['required','boolean']
        ];
    }
}