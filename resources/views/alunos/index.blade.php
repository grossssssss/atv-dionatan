@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

    <h2>Lista de Alunos</h2>

    @if($alunos->count() > 0)

        <ul>
            @foreach($alunos as $aluno)

                <li>
                    {{ $aluno->nome }}
                    -
                    {{ $aluno->curso }}

                    <a href="{{ route('alunos.show', $aluno->id) }}">
                        Ver aluno
                    </a>

                    |

                    <a href="{{ route('alunos.edit', $aluno->id) }}">
                        Editar
                    </a>
                </li>

            @endforeach
        </ul>

    @else

        <p>Nenhum aluno cadastrado.</p>

    @endif

@endsection