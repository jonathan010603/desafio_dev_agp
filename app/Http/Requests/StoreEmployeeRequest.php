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
            'fullname' => ['required', 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/i'],
            'nickname' => ['required', 'unique:employees', 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9_.]+$/i'],
            'cpf' => ['required', 'unique:employees', 'size:11'],
            'birthdate' => ['required', 'before:-18 years'],
            'role' => ['required', 'alpha_dash', 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9.\-() ]+$/i'],
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Preencha o campo "Nome Completo"',
            'nickname.required' => 'Preencha o campo "Apelido"',
            'nickname.unique' => 'Este apelido já está sendo usado',
            'cpf.required' => 'Preencha o campo "CPF"',
            'cpf.size' => 'O campo "CPF" deve possuir 11 caracteres',
            'cpf.unique' => 'Este CPF já está cadastrado',
            'birthdate.required' => 'Preencha o campo "Data de Nascimento"',
            'birthdate.before' => 'Colaborador deve possuir mais de 18 anos',
            'role.required' => 'Preencha o campo "Cargo"',
        ];
    }
}