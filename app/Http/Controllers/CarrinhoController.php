<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index()
    {
        return response()->json(Carrinho::all());
    }

    public function show(int $id)
    {
        $carrinho = Carrinho::find($id);

        if (!$carrinho) {
            return response()->json(['message' => 'Carrinho não encontrado.'], 404);
        }

        return response()->json($carrinho);
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'identificacao' => ['required', 'string', 'max:255'],
            'localizacao' => ['required', 'string', 'max:255'],
            'quantidade_notebooks' => ['required', 'integer', 'min:0'],
        ]);

        $carrinho = Carrinho::create($dados);

        return response()->json($carrinho, 201);
    }

    public function update(Request $request, int $id)
    {
        $carrinho = Carrinho::find($id);

        if (!$carrinho) {
            return response()->json(['message' => 'Carrinho não encontrado.'], 404);
        }

        $dados = $request->validate([
            'identificacao' => ['sometimes', 'required', 'string', 'max:255'],
            'localizacao' => ['sometimes', 'required', 'string', 'max:255'],
            'quantidade_notebooks' => ['sometimes', 'required', 'integer', 'min:0'],
        ]);

        $carrinho->update($dados);

        return response()->json($carrinho);
    }

    public function destroy(int $id)
    {
        $carrinho = Carrinho::find($id);

        if (!$carrinho) {
            return response()->json(['message' => 'Carrinho não encontrado.'], 404);
        }

        $carrinho->delete();

        return response()->json(['message' => 'Carrinho excluído com sucesso.']);
    }
}
