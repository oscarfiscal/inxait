<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'last_name' => 'required',
            'identification' => 'required',
            'department' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
        ];
    }
}
