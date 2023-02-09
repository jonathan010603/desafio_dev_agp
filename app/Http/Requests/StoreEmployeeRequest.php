<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'fullname' => ['required'],
            'nickname' => ['required', 'unique:employees'],
            'cpf' => ['required', 'unique:employees'],
            'birthdate' => ['required'],
            'role' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Preencha o campo "Nome Completo"',
            'nickname.required' => 'Preencha o campo "Apelido"',
            'cpf.required' => 'Preencha o campo "CPF"',
            'birthdate.required' => 'Preencha o campo "Data de Nascimento"',
            'role.required' => 'Preencha o campo "Cargo"',
        ];
    }
}