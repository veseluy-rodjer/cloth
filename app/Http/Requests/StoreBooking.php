<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBooking extends FormRequest
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
            if (isset('tel') {
                'tel' => 'regex:|[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}|';
            }
            'size' => 'required|string',
            'number' => 'required|integer',
        ];
    }
    
    public function messages()
    {
        return [
            'size.required' => 'Поле нужно заполнить',
            'size.string'  => 'Поле должно быть строкой',
            'number.required'  => 'Поле нужно заполнить',
            'number.integer'  => 'Поле должно быть целым числом',
            'tel.regex'  => 'Введите номер телефона в указанном формате',
        ];
    }
}
