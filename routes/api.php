
<?php

use App\Http\Controllers\Adicionar;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ChaveController;
use App\Http\Controllers\EmprestimoApiController;
use App\Http\Controllers\NotebookApiController;
use App\Http\Controllers\ResponsavelApiController;
use App\Http\Controllers\UsuarioApiController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// USUÁRIO AUTENTICADO
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// CADASTRO E LOGIN DE USUÁRIOS
Route::post('/salvar_usuario', [Adicionar::class, 'salvar_usuario']);
Route::post('/login', [UsuarioController::class, 'login']);

// CRUD DO SISTEMA
Route::apiResource('carrinhos', CarrinhoController::class);
Route::apiResource('usuarios', UsuarioApiController::class);
Route::apiResource('chaves', ChaveController::class);
Route::apiResource('emprestimos', EmprestimoApiController::class);
Route::apiResource('notebooks', NotebookApiController::class);
Route::apiResource('responsaveis', ResponsavelApiController::class);

// AUTENTICAÇÃO ADMINISTRATIVA
Route::post('/admin/cadastro', [AdminController::class, 'cadastro']);
Route::post('/admin/login', [AdminController::class, 'login']);

// ROTAS PROTEGIDAS DO ADMINISTRADOR
Route::middleware(['auth:sanctum', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/me', [AdminController::class, 'me']);

        Route::post('/logout', [AdminController::class, 'logout']);

    });
