<?php

namespace App\Http\Controllers;

use App\Models\Responsavel;
use Illuminate\Http\Request;

class ResponsavelApiController extends Controller
{
    public function index()
    {
        return response()->json(Responsavel::all());
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:150'],
            'matricula' => ['required', 'string', 'max:50', 'unique:responsavel,matricula'],
        ]);

        return response()->json(Responsavel::create($dados), 201);
    }

    public function show(int $id)
    {
        $responsavel = Responsavel::find($id);
        return $responsavel
            ? response()->json($responsavel)
            : response()->json(['message' => 'Responsável não encontrado.'], 404);
    }

    public function update(Request $request, int $id)
    {
        $responsavel = Responsavel::find($id);
        if (!$responsavel) {
            return response()->json(['message' => 'Responsável não encontrado.'], 404);
        }

        $dados = $request->validate([
            'nome' => ['sometimes', 'required', 'string', 'max:150'],
            'matricula' => ['sometimes', 'required', 'string', 'max:50', 'unique:responsavel,matricula,' . $id],
        ]);

        $responsavel->update($dados);
        return response()->json($responsavel);
    }

    public function destroy(int $id)
    {
        $responsavel = Responsavel::find($id);
        if (!$responsavel) {
            return response()->json(['message' => 'Responsável não encontrado.'], 404);
        }

        $responsavel->delete();
        return response()->json(['message' => 'Responsável excluído com sucesso.']);
    }
}