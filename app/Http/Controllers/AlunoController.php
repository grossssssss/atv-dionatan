<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('alunos.index');
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado';
    }

    public function show(string $id)
    {
        return view('alunos.show');
    }

    public function edit(string $id)
    {
        return view('alunos.edit');
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