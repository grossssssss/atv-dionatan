@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')

    <h2>Detalhes do Aluno</h2>

    <p>
        <strong>ID:</strong>
        {{ $aluno->id }}
    </p>

    <p>
        <strong>Nome:</strong>
        {{ $aluno->nome }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $aluno->email }}
    </p>

    <p>
        <strong>Curso:</strong>
        {{ $aluno->curso }}
    </p>

    <a href="{{ route('alunos.index') }}">
        Voltar
    </a>

@endsection