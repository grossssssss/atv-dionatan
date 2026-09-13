<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return 'Página Sobre';
});

Route::get('/contato', function () {
    return 'Página de Contato';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto selecionado: $id";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria selecionada: $id";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuário selecionado: $id";
});

Route::get('/alunos-curso/{curso}', [AlunoController::class, 'porCurso']);

Route::get('/alunos-nome/{palavra}', [AlunoController::class, 'buscarNome']);

Route::get('/alunos-recentes', [AlunoController::class, 'recentes']);

Route::get('/quantidade-alunos', [AlunoController::class, 'quantidade']);

Route::get('/cursos/{curso}/alunos', [AlunoController::class, 'alunosDoCurso'])
    ->name('cursos.alunos');

Route::resource('alunos', AlunoController::class);

Route::get('/dashboard', function () {
    return redirect()->route('alunos.index');
})->middleware('auth')->name('dashboard');

Route::get('/admin', function () {
    return 'Área administrativa - acesso permitido!';
})->middleware(['auth', 'role:admin']);

Route::get('/professor', function () {
    return 'Área do professor - acesso permitido!';
})->middleware(['auth', 'role:professor']);

require __DIR__.'/auth.php';