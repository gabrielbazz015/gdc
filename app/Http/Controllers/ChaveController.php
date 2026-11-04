<?php

namespace App\Http\Controllers;

use App\Models\Chave;
use Illuminate\Http\Request;

class ChaveController extends Controller
{
    public function index() { return response()->json(Chave::all()); }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'identificacao' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'id_carrinho' => ['required', 'integer', 'exists:carrinho,id'],
        ]);
        return response()->json(Chave::create($dados), 201);
    }

    public function show(int $id)
    {
        $item = Chave::find($id);
        return $item ? response()->json($item) : response()->json(['message' => 'Chave não encontrada.'], 404);
    }

    public function update(Request $request, int $id)
    {
        $item = Chave::find($id);
        if (!$item) return response()->json(['message' => 'Chave não encontrada.'], 404);
        $dados = $request->validate([
            'identificacao' => ['sometimes', 'required', 'string', 'max:255'],
            'status' => ['sometimes', 'required', 'string', 'max:255'],
            'id_carrinho' => ['sometimes', 'required', 'integer', 'exists:carrinho,id'],
        ]);
        $item->update($dados);
        return response()->json($item);
    }

    public function destroy(int $id)
    {
        $item = Chave::find($id);
        if (!$item) return response()->json(['message' => 'Chave não encontrada.'], 404);
        $item->delete();
        return response()->json(['message' => 'Chave excluída com sucesso.']);
    }
}
