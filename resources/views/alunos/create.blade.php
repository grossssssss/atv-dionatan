@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')

    <h2>Cadastrar Aluno</h2>

    <form action="{{ route('alunos.store') }}" method="POST">

        @csrf

        <div>
            <label for="nome">Nome:</label>
            <input
                type="text"
                id="nome"
                name="nome"
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
            >
        </div>

        <br>

        <div>
            <label for="curso">Curso:</label>
            <input
                type="text"
                id="curso"
                name="curso"
            >
        </div>

        <br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

    <br>

    <a href="{{ route('alunos.index') }}">
        Voltar
    </a>

@endsection