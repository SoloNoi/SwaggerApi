<?php

namespace App\Http\Requests\Notebook;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string',
            'company' => 'nullable|string',
            'phone' => 'required|string|max:20|unique:notebooks,phone',
            'email' => 'required|email|unique:notebooks,email',
            'birth_date' => 'nullable|date',
            'photo' => 'nullable|string'
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Поле ФИО является обязательным.',
            'full_name.string' => 'Поле ФИО должно быть строкой.',
            'full_name.max' => 'Поле ФИО не может превышать 255 символов.',

            'phone.required' => 'Поле Телефон является обязательным.',
            'phone.string' => 'Поле Телефон должно быть строкой.',
            'phone.max' => 'Поле Телефон не может превышать 20 символов.',

            'email.required' => 'Поле Email является обязательным.',
            'email.email' => 'Поле Email должно быть действительным адресом электронной почты.',
            'email.unique' => 'Этот Email уже зарегистрирован.',

            'birth_date.date' => 'Поле Дата рождения должно быть корректной датой.',

        ];
    }
}
