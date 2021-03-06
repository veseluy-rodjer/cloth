<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCloth extends FormRequest
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
            'picture' => 'file|image|max:9024',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            's' => 'integer',
            'm' => 'integer',
            'l' => 'integer',
            'xl' => 'integer',
            'xxl' => 'integer',
        ];
    }
    
    public function messages()
    {
        return [
            'picture.file' => 'Ошибка при загрузке файла',
            'picture.image'  => 'Неверный формат файла',
            'picture.max' => 'Этот файл слишком большой',
            'name.required' => 'Поле нужно заполнить',
            'name.string'  => 'Поле должно быть строкой',
            'description.required' => 'Поле нужно заполнить',
            'description.string'  => 'Поле должно быть строкой',
            'price.required'  => 'Поле нужно заполнить',
            'price.numeric'  => 'Поле должно быть числом',
            's.integer'  => 'Поле должно быть целым числом',
            'm.integer'  => 'Поле должно быть целым числом',
            'l.integer'  => 'Поле должно быть целым числом',
            'xl.integer'  => 'Поле должно быть целым числом',
            'xxl.integer'  => 'Поле должно быть целым числом',
        ];
    }    
}
