<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function autenticar(Request $request)
    {
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);

        $usuario = Usuario::where('email', $dados['email'])->first();

        if (!$usuario || !Hash::check($dados['senha'], $usuario->senha)) {
            return back()
                ->withErrors([
                    'email' => 'E-mail ou senha incorretos.'
                ])
                ->withInput();
        }

        session([
            'usuario_id' => $usuario->id,
            'usuario_nome' => $usuario->nome,
            'usuario_tipo' => $usuario->tipo,
        ]);

        return redirect()->route('home');
    }
}
