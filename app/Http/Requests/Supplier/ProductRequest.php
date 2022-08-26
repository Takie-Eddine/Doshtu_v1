<?php

namespace App\Http\Requests\Supplier;

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
            'name' => 'required|max:300',
            'company_id'=>'exists:supplier_companies,id',
            'slug' => 'required|unique:products,slug,'.$this -> id,
            'description' => 'required|min:150',
            //'title' => 'required|max:500',
            'categories' => 'array|min:1', //[]
            'categories.*' => 'numeric|exists:categories,id',
            'tags' => 'nullable',
            'sku' => 'nullable|min:3|max:10|unique:products,sku,'.$this -> id,
            'price' => 'required|min:0|numeric',
            'qty' => 'required',
            //'photo' => 'required_without:id|array|min:1|mimes:jpg,jpeg,png'
            'photo' => 'required_without:id|array|min:1',
            'photo.*' => 'mimes:jpg,jpeg,png',

        ];
    }
}
