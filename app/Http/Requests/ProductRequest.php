<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required',
            'order' => 'nullable',
            'title' => 'required|string|max:255',
            'titletr' => 'required|string|max:255',
            'description' => 'nullable|string',
            'descriptiontr' => 'nullable|string',
            'properties' => 'array|exists:properties,id',
        ];
    }
}
