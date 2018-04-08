<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
                $city = $this->route('city');
                $departament = $this->all()['departament_id'];
                return [
                    'name' => 'required|unique:cities,name,'.$city.',id,departament_id,'.$departament,
                    'departament_id' => 'required'
                ];
            case 'POST':
                return [
                    'name' => 'required|unique:cities,name',
                    'departament_id' => 'required'
                ];
        }
    }
}
