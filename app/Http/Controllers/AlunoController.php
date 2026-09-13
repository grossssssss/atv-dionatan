<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = [
            [
                'id' => 1,
                'nome' => 'João',
                'curso' => 'Desenvolvimento de Sistemas'
            ],
            [
                'id' => 2,
                'nome' => 'Maria',
                'curso' => 'Engenharia de Software'
            ],
            [
                'id' => 3,
                'nome' => 'Pedro',
                'curso' => 'Sistemas de Informação'
            ]
        ];

        return view('alunos.index', compact('alunos'));
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
        return view('alunos.show', compact('id'));
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