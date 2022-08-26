<?php

namespace App\Http\Requests\Supplier;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'company_name' => 'required',
            'description' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'pincode' => 'required|numeric',
            'state' => 'required',
            'city' => 'required',
            'country' => 'required',
            'website' => '',
            'logo' => 'mimes:jpg,jpeg,png',
            'facebook' => '',
            'instagram' => '',
            'twitter' => '',
            'youtube' => '',
            'telegram' => '',
            'linkedin' => '',

        ];
    }
}
