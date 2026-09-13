<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function create()
    {
        return 'Formulário para cadastrar aluno';
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado';
    }

    public function show(string $id)
    {
        return "Detalhes do aluno: $id";
    }

    public function edit(string $id)
    {
        return "Editar aluno: $id";
    }

    public function update(Request $request, string $id)
    {
        return "Aluno $id atualizado";
    }

    public function destroy(string $id)
    {
        return "Aluno $id excluído";
    }
}