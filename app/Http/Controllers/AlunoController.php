<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        Gate::authorize('create', Aluno::class);

        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        Aluno::create($request->validated());

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'curso' => $request->curso,
        ]);

        return redirect()->route('alunos.index');
    }

    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        return redirect()->route('alunos.index');
    }

    // ATV 11

    public function porCurso(string $curso)
    {
        return Aluno::where('curso', $curso)->get();
    }

    public function buscarNome(string $palavra)
    {
        return Aluno::where('nome', 'like', "%{$palavra}%")->get();
    }

    public function recentes()
    {
        return Aluno::orderByDesc('created_at')
            ->take(5)
            ->get();
    }

    public function quantidade()
    {
        return [
            'quantidade' => Aluno::count()
        ];
    }
    public function alunosDoCurso(Curso $curso)
    {
    $curso->load('alunos');

    return view('alunos.por-curso', compact('curso'));
    }
}