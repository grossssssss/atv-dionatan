@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

    <h2>Lista de Alunos</h2>
    @if(session('sucesso'))
    <p>{{ session('sucesso') }}</p>
@endif

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

                    @can('update', $aluno)
                        <a href="{{ route('alunos.edit', $aluno->id) }}">
                            Editar
                        </a>
                    @endcan
                </li>
                @can('delete', $aluno)
                @can('create', App\Models\Aluno::class)
                    <a href="{{ route('alunos.create') }}">
                        Cadastrar novo aluno
                    </a>

                @endcan
                <form
                    action="{{ route('alunos.destroy', $aluno->id) }}"
                    method="POST"
                    style="display:inline"
                >

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Excluir
                    </button>

                </form>

            @endcan

            @endforeach
        </ul>

    @else

        <p>Nenhum aluno cadastrado.</p>

    @endif

@endsection