<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:0'],
            'price_discounted' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', 'in:active,inactive,stop_selling,unavailable'],
            'stock' => ['required', 'integer', 'min:0'],
            'poster' => ['nullable', 'string'],
            'category_id' => ['nullable', 'exists:categories,id'],
        ];
    }
}
