<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Adicionar extends Controller
{
    public function salvar_usuario(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:usuario,email'],
            'senha' => ['required', 'string', 'min:6'],
            'tipo' => ['required', 'in:professor,funcionario,responsavel'],
        ]);

        $dados['senha'] = Hash::make($dados['senha']);
        $usuario = Usuario::create($dados);

        return response()->json(['message' => 'Usuário cadastrado com sucesso!', 'usuario' => $usuario], 201);
    }
}
