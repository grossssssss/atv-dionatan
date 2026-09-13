@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')

    <h2>Editar Aluno</h2>

    <p>Aluno: {{ $aluno->nome }}</p>

    <p>O formulário de edição será adicionado posteriormente.</p>

    <a href="{{ route('alunos.index') }}">
        Voltar
    </a>

@endsection