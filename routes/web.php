<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\ContagemNotebooksController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Página Inicial
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'autenticar'])
    ->name('login.autenticar');

    Route::post('/logout', function () {
    session()->forget([
        'usuario_id',
        'usuario_nome',
        'usuario_tipo',
    ]);

    return redirect()->route('home');
})->name('logout');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/notificacoes', function () {
    return view('notificacoes');
})->name('notificacoes');

/*
|--------------------------------------------------------------------------
| Cadastro de Usuário
|--------------------------------------------------------------------------
*/

Route::get('/cadastro', [UsuarioController::class, 'cadastro_html'])
    ->name('cadastro');

Route::post('/cadastro', [UsuarioController::class, 'store'])
    ->name('cadastro.store');


/*
|--------------------------------------------------------------------------
| Empréstimo
|--------------------------------------------------------------------------
*/

Route::get('/emprestimo', [EmprestimoController::class, 'index'])
    ->name('emprestimo');

Route::post('/emprestimo', [EmprestimoController::class, 'store'])
    ->name('emprestimo.store');

Route::get('/emprestimo/confirmacao', function () {
    return view('confirmacao_emprestimo');
})->name('emprestimo.confirmacao');


/*
|--------------------------------------------------------------------------
| Contagem dos Notebooks
|--------------------------------------------------------------------------
*/

Route::get('/contagem-notebooks', [ContagemNotebooksController::class, 'index'])
    ->name('contagem.notebooks');


/*
|--------------------------------------------------------------------------
| Reclame Aqui
|--------------------------------------------------------------------------
*/

Route::get('/reclame-aqui', function () {
    return view('reclame_aqui');
})->name('reclame.aqui');

Route::get('/reclame-aqui/confirmacao', function () {
    return view('confirmacao_reclamacao');
})->name('reclame.confirmacao');

