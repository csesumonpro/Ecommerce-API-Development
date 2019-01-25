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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required:min:2|max:40',
            'description' => 'required:min:10|max:1000',
            'price' => 'required|max:6',
            'stock' => 'required|max:5',
            'discount' => 'required|max:2',
        ];
    }
}
