<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Página Sobre';
});

Route::resource('alunos', AlunoController::class);

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