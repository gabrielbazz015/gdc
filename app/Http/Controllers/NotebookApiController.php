<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class NotebookApiController extends Controller
{
    public function index() { return response()->json(Notebook::all()); }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'patrimonio' => ['required', 'string', 'max:50', 'unique:notebook,patrimonio'],
            'modelo' => ['nullable', 'string', 'max:100'],
            'status' => ['required', 'string', 'max:100'],
            'id_carrinho' => ['required', 'integer', 'exists:carrinho,id'],
        ]);
        return response()->json(Notebook::create($dados), 201);
    }

    public function show(int $id)
    {
        $item = Notebook::find($id);
        return $item ? response()->json($item) : response()->json(['message' => 'Notebook não encontrado.'], 404);
    }

    public function update(Request $request, int $id)
    {
        $item = Notebook::find($id);
        if (!$item) return response()->json(['message' => 'Notebook não encontrado.'], 404);
        $dados = $request->validate([
            'patrimonio' => ['sometimes', 'required', 'string', 'max:50', 'unique:notebook,patrimonio,' . $id],
            'modelo' => ['sometimes', 'nullable', 'string', 'max:100'],
            'status' => ['sometimes', 'required', 'string', 'max:100'],
            'id_carrinho' => ['sometimes', 'required', 'integer', 'exists:carrinho,id'],
        ]);
        $item->update($dados);
        return response()->json($item);
    }

    public function destroy(int $id)
    {
        $item = Notebook::find($id);
        if (!$item) return response()->json(['message' => 'Notebook não encontrado.'], 404);
        try {
            $item->delete();
        } catch (QueryException $exception) {
            if ($exception->getCode() !== '23000') {
                throw $exception;
            }

            return response()->json([
                'message' => 'Não é possível excluir o notebook porque ele está vinculado a um empréstimo.',
            ], 409);
        }

        return response()->json(['message' => 'Notebook excluído com sucesso.'], 200);
    }
}
