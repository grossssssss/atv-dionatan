@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')

    <h2>Cadastrar Aluno</h2>

    <p>Aqui será criado o formulário de cadastro do aluno.</p>

    <a href="{{ route('alunos.index') }}">
        Voltar
    </a>

@endsection