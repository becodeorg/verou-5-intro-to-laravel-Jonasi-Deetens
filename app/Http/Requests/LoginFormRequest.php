<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'firstName.required' => 'First name can\'t be empty.',
            'lastName.required' => 'Last name can\'t be empty.',
            'firstName.max' => 'The first name must not exceed :max characters.',
            'lastName.max' => 'The last name must not exceed :max characters.',
        ];
    }
}