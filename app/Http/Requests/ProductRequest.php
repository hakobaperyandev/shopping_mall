<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'title'       => 'required|string|max:100',
            'description' => 'required|string',
            'sku'         => ['required', 'string', 'size:8', Rule::unique('products', 'sku')],
            'category_id' => ['required', 'integer', 'exists:categories,id', Rule::unique('products', 'category_id')],
            'price'       => 'required|numeric|between:0,99999.99|regex:/^\d+(\.\d{1,2})?$/',
        ];

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $productId = $this->route('product');
            $rules['sku'] = [
                'required',
                'string',
                'size:8',
                Rule::unique('products', 'sku')->ignore($productId),
            ];

            $rules['category_id'] = [
                'required',
                'integer',
                'exists:categories,id',
                Rule::unique('products', 'category_id')->ignore($productId),
            ];
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'price.regex'        => 'The price must be a numeric value with no more than two decimal places.',
            'category_id.unique' => 'The category ID must be unique and not associated with another product.',
        ];
    }
}
