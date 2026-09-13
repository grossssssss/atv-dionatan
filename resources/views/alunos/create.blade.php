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
                value="{{ old('nome') }}"
            >

            @error('nome')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="email">Email:</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
            >

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="curso">Curso:</label>

            <input
                type="text"
                id="curso"
                name="curso"
                value="{{ old('curso') }}"
            >

            @error('curso')
                <p>{{ $message }}</p>
            @enderror
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