<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContagemNotebooksController extends Controller
{
    public function index()
    {
        // Quantidade prevista para cada carrinho
        $quantidadesPorCarrinho = [
            1 => 30,
            2 => 30,
            3 => 27,
        ];

        // Buscar os carrinhos cadastrados
        $carrinhos = DB::table('carrinho')
            ->orderBy('id')
            ->get();

        // Buscar notebooks e identificar seus carrinhos
        $notebooks = DB::table('notebook as n')
            ->leftJoin('carrinho as c', 'n.id_carrinho', '=', 'c.id')
            ->select(
                'n.*',
                'c.identificacao as carrinho_identificacao'
            )
            ->orderBy('n.id')
            ->get();

        // Total real de notebooks cadastrados
        $totalNotebooks = $notebooks->count();

        return view('contagem_notebooks', [
            'carrinhos' => $carrinhos,
            'notebooks' => $notebooks,
            'total' => $totalNotebooks,
            'totalNotebooks' => $totalNotebooks,
            'quantidadesPorCarrinho' => $quantidadesPorCarrinho,
        ]);
    }

    public function atualizarStatus(Request $request, $id)
    {
        // Somente o responsável pode alterar os status
        if (strtolower(trim((string) session('usuario_tipo'))) !== 'responsavel') {
            abort(403, 'Somente o responsável pode alterar os status.');
        }

        $dados = $request->validate([
            'status' => [
                'required',
                'in:Disponível,Sendo utilizado,Em manutenção',
            ],
        ]);

        $notebook = DB::table('notebook')
            ->where('id', $id)
            ->first();

        if (!$notebook) {
            return redirect()
                ->route('contagem.notebooks')
                ->with('erro', 'Notebook não encontrado.');
        }

        DB::table('notebook')
            ->where('id', $id)
            ->update([
                'status' => $dados['status'],
            ]);

        return redirect()
            ->route('contagem.notebooks')
            ->with('sucesso', 'Status atualizado com sucesso!');
    }

    public function store(Request $request)
    {
        // Somente o responsável pode cadastrar notebooks
        if (strtolower(trim((string) session('usuario_tipo'))) !== 'responsavel') {
            abort(403, 'Somente o responsável pode cadastrar notebooks.');
        }

        $dados = $request->validate([
            'patrimonio' => [
                'required',
                'string',
                'max:50',
                'unique:notebook,patrimonio',
            ],
            'modelo' => [
                'nullable',
                'string',
                'max:100',
            ],
            'id_carrinho' => [
                'required',
                'integer',
                'exists:carrinho,id',
            ],
        ]);

        DB::table('notebook')->insert([
            'patrimonio' => $dados['patrimonio'],
            'modelo' => $dados['modelo'] ?? null,
            'status' => 'Disponível',
            'id_carrinho' => $dados['id_carrinho'],
        ]);

        return redirect()
            ->route('contagem.notebooks')
            ->with('sucesso', 'Notebook cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        // Somente o responsável pode excluir notebooks
        if (strtolower(trim((string) session('usuario_tipo'))) !== 'responsavel') {
            abort(403, 'Somente o responsável pode excluir notebooks.');
        }

        $notebook = DB::table('notebook')
            ->where('id', $id)
            ->first();

        if (!$notebook) {
            return redirect()
                ->route('contagem.notebooks')
                ->with('erro', 'Notebook não encontrado.');
        }

        DB::table('notebook')
            ->where('id', $id)
            ->delete();

        return redirect()
            ->route('contagem.notebooks')
            ->with('sucesso', 'Notebook excluído com sucesso!');
    }
}
