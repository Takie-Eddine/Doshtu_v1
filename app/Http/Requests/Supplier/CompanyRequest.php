<?php

namespace App\Http\Requests\Supplier;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'company_name' => 'required|unique:companies,id,'.$this->company,
            'company_description' => 'required',
            'company_email' => 'required|email|unique:companies,id,'.$this->company,
            'company_phone' => 'required|digits:10|unique:companies,id,'.$this->company,
            'company_country' => 'required',
            'company_state' => 'required',
            'company_city' => 'required',
            'company_address' => 'required',
            'company_postalcode' => 'required',
            'company_website' => '',
            'company_facebook' => '',
            'company_instagram' => '',
            'company_twitter' => '',
            'company_telegram' => '',
            'company_youtube' => '',
            'company_whatsapp' => '',
        ];
    }
}
