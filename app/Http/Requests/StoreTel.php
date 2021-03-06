<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTel extends FormRequest
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
            'surname' => 'required|string',
            'tel' => 'regex:{^(\+)[0-9]{12}$}',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Поле нужно заполнить',
            'name.string'  => 'Поле должно быть строкой',
            'surname.required' => 'Поле нужно заполнить',
            'surname.string'  => 'Поле должно быть строкой',                    
            'tel.regex'  => 'Введите номер телефона в указанном формате',
        ];
    }    
}
