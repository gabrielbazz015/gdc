<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // CADASTRO DO PRIMEIRO ADMINISTRADOR
    public function cadastro(Request $request)
    {
        if (Admin::exists()) {
            return response()->json([
                'message' => 'O cadastro inicial já foi realizado.'
            ], 403);
        }

        $chave = config('services.admin_setup_key');

        if (
            !$chave ||
            !hash_equals($chave, (string) $request->header('X-Admin-Setup-Key'))
        ) {
            return response()->json([
                'message' => 'Autorização inválida.'
            ], 403);
        }

        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:admins,email'],
            'senha' => ['required', 'string', 'min:8'],
        ]);

        $admin = new Admin();
        $admin->nome = $dados['nome'];
        $admin->email = $dados['email'];
        $admin->senha = Hash::make($dados['senha']);
        $admin->save();

        return response()->json([
            'message' => 'Administrador cadastrado com sucesso!',
            'admin' => [
                'id' => $admin->id,
                'nome' => $admin->nome,
                'email' => $admin->email,
            ],
        ], 201);
    }

    // LOGIN ADMINISTRATIVO
    public function login(Request $request)
    {
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required', 'string'],
        ]);

        $admin = Admin::where('email', $dados['email'])->first();

        if (!$admin || !Hash::check($dados['senha'], $admin->senha)) {
            return response()->json([
                'message' => 'E-mail ou senha incorretos.'
            ], 401);
        }

        $token = $admin->createToken('gdc-admin')->plainTextToken;

        return response()->json([
            'message' => 'Login administrativo realizado com sucesso!',
            'token' => $token,
            'admin' => [
                'id' => $admin->id,
                'nome' => $admin->nome,
                'email' => $admin->email,
            ],
        ], 200);
    }

    // CONSULTAR ADMINISTRADOR AUTENTICADO
    public function me(Request $request)
    {
        $admin = $request->user();

        return response()->json([
            'admin' => [
                'id' => $admin->id,
                'nome' => $admin->nome,
                'email' => $admin->email,
            ],
        ]);
    }

    // LOGOUT ADMINISTRATIVO
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout realizado com sucesso!'
        ]);
    }
}
