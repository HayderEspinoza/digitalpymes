<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartamentRequest extends FormRequest
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
                $departament = $this->route('departament');
                return [
                    'name' => 'required|unique:departaments,name,'.$departament.',id',
                ];
            case 'POST':
                return [
                    'name' => 'required|unique:departaments,name',
                ];
        }
    }
}