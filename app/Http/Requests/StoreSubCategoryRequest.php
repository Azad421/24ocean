<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubCategoryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'category' => 'required',
            'category_name' => 'required|unique:sub_categories,name',
            'category_status' => 'required',
            'description' => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'category' => 'Main Category',
            'category_name' => 'Category Name',
            'category_status' => 'Category Status',
            'description' => 'Category Description'
        ];
    }
}
