<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                $user = $this->route('user');
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,'.$user.',id',
                    'username' => 'required|unique:users,username,'.$user.',id',
                    'lastname' => 'required',
                    'phone' => 'required',
                    'role_id' => 'required'
                ];
            case 'POST':
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'username' => 'required|unique:users,username',
                    'lastname' => 'required',
                    'phone' => 'required',
                    'role_id' => 'required'
                ];
        }
    }
}
