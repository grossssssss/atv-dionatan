@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')

    <h2>Editar Aluno</h2>

    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>

            <input
                type="text"
                id="nome"
                name="nome"
                value="{{ $aluno->nome }}"
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ $aluno->email }}"
            >
        </div>

        <br>

        <div>
            <label for="curso">Curso:</label>

            <input
                type="text"
                id="curso"
                name="curso"
                value="{{ $aluno->curso }}"
            >
        </div>

        <br>

        <button type="submit">
            Salvar alterações
        </button>

    </form>

    <br>

    <a href="{{ route('alunos.index') }}">
        Voltar
    </a>

@endsection