@extends('layouts.app')

@section('title', 'Alunos do Curso')

@section('content')

    <h2>Curso: {{ $curso->nome }}</h2>

    @if($curso->alunos->count() > 0)

        <h3>Alunos deste curso:</h3>

        <ul>
            @foreach($curso->alunos as $aluno)

                <li>
                    {{ $aluno->nome }}
                    -
                    {{ $aluno->email }}
                </li>

            @endforeach
        </ul>

    @else

        <p>Nenhum aluno relacionado a este curso.</p>

    @endif

    <a href="{{ route('alunos.index') }}">
        Voltar
    </a>

@endsection