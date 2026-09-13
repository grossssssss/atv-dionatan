@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')

    <h2>Detalhes do Aluno</h2>

    @if($id)
        <p>Aluno selecionado: {{ $id }}</p>
    @else
        <p>Aluno não encontrado.</p>
    @endif

    <a href="{{ route('alunos.index') }}">
        Voltar
    </a>

@endsection