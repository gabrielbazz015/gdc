<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoApiController extends Controller
{
    public function index() { return response()->json(Emprestimo::orderByDesc('data_retirada')->get()); }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'id_usuario' => ['required', 'exists:usuario,id'],
            'id_responsavel' => ['required', 'exists:responsavel,id'],
            'id_carrinho' => ['required', 'exists:carrinho,id'],
            'data_retirada' => ['required', 'date'],
            'data_devolucao' => ['nullable', 'date', 'after_or_equal:data_retirada'],
            'finalidade' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
        ]);
        return response()->json(Emprestimo::create($dados), 201);
    }

    public function show(int $id)
    {
        $item = Emprestimo::find($id);
        return $item ? response()->json($item) : response()->json(['message' => 'Empréstimo não encontrado.'], 404);
    }

    public function update(Request $request, int $id)
    {
        $item = Emprestimo::find($id);
        if (!$item) return response()->json(['message' => 'Empréstimo não encontrado.'], 404);
        $dados = $request->validate([
            'id_usuario' => ['sometimes', 'required', 'exists:usuario,id'],
            'id_responsavel' => ['sometimes', 'required', 'exists:responsavel,id'],
            'id_carrinho' => ['sometimes', 'required', 'exists:carrinho,id'],
            'data_retirada' => ['sometimes', 'required', 'date'],
            'data_devolucao' => ['nullable', 'date', 'after_or_equal:data_retirada'],
            'finalidade' => ['sometimes', 'required', 'string', 'max:255'],
            'status' => ['sometimes', 'required', 'string', 'max:255'],
        ]);
        $item->update($dados);
        return response()->json($item);
    }

    public function destroy(int $id)
    {
        $item = Emprestimo::find($id);
        if (!$item) return response()->json(['message' => 'Empréstimo não encontrado.'], 404);
        $item->delete();
        return response()->json(['message' => 'Empréstimo excluído com sucesso.']);
    }
}
