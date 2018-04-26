<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
            'name' => 'required|string',
            'email' => 'email',
            'message' => 'required|string',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Поле нужно заполнить',
            'name.string'  => 'Поле должно быть строкой',
            'email.email' => 'Поле должно быть эл. адресом',
            'message.required'  => 'Поле нужно заполнить',
            'message.string'  => 'Поле должно быть строкой',                    
        ];
    }
}
