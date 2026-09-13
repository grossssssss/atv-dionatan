<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:alunos,email',
            'curso' => 'required|string|min:3|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do aluno é obrigatório.',
            'nome.string' => 'O nome deve ser um texto.',
            'nome.min' => 'O nome deve possuir pelo menos 3 caracteres.',
            'nome.max' => 'O nome não pode possuir mais de 255 caracteres.',

            'email.required' => 'O email do aluno é obrigatório.',
            'email.email' => 'Digite um endereço de email válido.',
            'email.unique' => 'Este email já está cadastrado.',

            'curso.required' => 'O curso do aluno é obrigatório.',
            'curso.string' => 'O curso deve ser um texto.',
            'curso.min' => 'O curso deve possuir pelo menos 3 caracteres.',
            'curso.max' => 'O curso não pode possuir mais de 255 caracteres.',
        ];
    }
}