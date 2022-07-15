<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
            'fName' => 'required',
            'contact_no' => 'required|numeric',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'zip_code' => 'required'
        ];
    }
}
