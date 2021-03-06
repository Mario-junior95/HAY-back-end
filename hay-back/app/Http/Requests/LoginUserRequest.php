<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'email' => 'required|exists:user|bail',
            'password' => 'required|min:6|bail',
        ];
    }
       /**
      * Get the error messages for the defined validation rules.
      *
      * @return array
    */

    public function messages()
    {
        return [
            'email.required' => 'Username and password required!',
            'email.exists' => 'Invalid Username or password',
            'password.required' => 'Username and password required!',
            'password.min' => 'password must contain at least 6 characters!',
        ];
    }
}
