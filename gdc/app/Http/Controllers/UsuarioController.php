<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastro_html()
    {
        return view('cadastro_usuario');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:usuario,email'],
            'senha' => ['required', 'string', 'min:6'],
            'tipo' => ['required', 'in:professor,funcionario,responsavel'],
        ]);

        // Criptografa a senha antes de salvar no banco
        $dados['senha'] = Hash::make($dados['senha']);

        Usuario::create($dados);

        return redirect()
            ->route('login')
            ->with('sucesso', 'Conta criada com sucesso!');
    }
}
