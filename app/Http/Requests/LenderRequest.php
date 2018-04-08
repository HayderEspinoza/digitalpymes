<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LenderRequest extends FormRequest
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
        switch ($this->getMethod()) 
        {
            case 'PUT':
                $lender = $this->route('lender');
                return [
                    'name' => 'required',
                    'city_id' => 'required',
                    'address' => 'required',
                    'cellphone' => 'required',
                    'service_id' => 'required',
                    'category_id' => 'required',
                    'description' => 'required',
                ];
            case 'POST':
                return [
                    'name' => 'required|unique:lenders,name',
                    'city_id' => 'required',
                    'address' => 'required',
                    'cellphone' => 'required',
                    'service_id' => 'required',
                    'category_id' => 'required',
                    'description' => 'required',
                ];
        }
    }
}
