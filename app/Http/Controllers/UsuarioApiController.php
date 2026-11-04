<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioApiController extends Controller
{
    public function index()
    {
        return response()->json(Usuario::all());
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:usuario,email'],
            'senha' => ['required', 'string', 'min:6'],
            'tipo' => ['required', 'in:professor,funcionario,responsavel'],
        ]);
        $dados['senha'] = Hash::make($dados['senha']);
        return response()->json(Usuario::create($dados), 201);
    }

    public function show(int $id)
    {
        $usuario = Usuario::find($id);
        return $usuario ? response()->json($usuario) : response()->json(['message' => 'Usuário não encontrado.'], 404);
    }

    public function update(Request $request, int $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) return response()->json(['message' => 'Usuário não encontrado.'], 404);

        $dados = $request->validate([
            'nome' => ['sometimes', 'required', 'string', 'max:255'],
            'email' => ['sometimes', 'required', 'email', 'max:255', 'unique:usuario,email,' . $id],
            'senha' => ['sometimes', 'required', 'string', 'min:6'],
            'tipo' => ['sometimes', 'required', 'in:professor,funcionario,responsavel'],
        ]);
        if (isset($dados['senha'])) $dados['senha'] = Hash::make($dados['senha']);
        $usuario->update($dados);
        return response()->json($usuario);
    }

    public function destroy(int $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) return response()->json(['message' => 'Usuário não encontrado.'], 404);
        return response()->json(['message' => 'Usuário excluído com sucesso.']);
    }
}
