<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
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

            'name_category' => 'required|unique:categories,name_category',
            // 'category_description',
            // 'category_image',
            // 'category_status',
        ];
    }
    public function messages()
    {
        return [
            'name_category.required' => 'Vui lòng nhập tên danh mục',
            'name_category.unique' => 'Danh mục này đã tồn tại',
        ];
    }
}
