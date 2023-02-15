<?php

namespace App\Http\Requests\Api;

use Gate;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiPostUpdateRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(
            response()->json([
                'validation_errors' => $validator->errors()->all()
            ], 400)
        );
    }

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
            'fullname' => ['required', 'regex:/([a-zA-Z]+\s?\b){2,}/'],
            'nickname' => ['required', 'max:12', 'min:8', 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9_.]+$/i', Rule::unique('employees')->ignore($this->employee)],
            'cpf' => ['required', 'size:11', Rule::unique('employees')->ignore($this->employee)],
            'birthdate' => ['required', 'before:-18 years'],
            'role' => ['required', 'alpha_dash', 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9.\-() ]+$/i'],
        ];
    }

    protected function getNumbers($str)
    {
        return preg_replace("/[^0-9]/", '', $str);
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'cpf' => $this->getNumbers($this->cpf)
        ]);
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Preencha o campo "Nome Completo"',
            'fullname.regex' => '"Nome Completo" deve possuir nome e sobrenome com apenas letras, separados por espaço',
            'nickname.required' => 'Preencha o campo "Apelido"',
            'nickname.unique' => 'Este apelido já está sendo usado',
            'nickname.max' => 'O apelido deve possuir 12 caracteres, no máximo',
            'nickname.min' => 'O apelido deve possuir 8 caracteres, no mínimo',
            'cpf.required' => 'Preencha o campo "CPF"',
            'cpf.size' => 'O campo "CPF" deve possuir 11 caracteres numéricos',
            'cpf.unique' => 'Este CPF já está cadastrado',
            'birthdate.required' => 'Preencha o campo "Data de Nascimento"',
            'birthdate.before' => 'Colaborador deve possuir mais de 18 anos',
            'role.required' => 'Preencha o campo "Cargo"',
        ];
    }
}