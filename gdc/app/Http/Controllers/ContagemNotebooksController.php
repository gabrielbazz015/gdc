<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ContagemNotebooksController extends Controller
{
    public function index()
    {
        // Dados dos carrinhos
        $carrinhos = DB::table('carrinho')
            ->orderBy('id')
            ->get();

        // Números atuais do estoque
        $total = 87;
        $disponiveis = 87;
        $emUso = 0;

        // Lista dos notebooks
        $notebooks = DB::table('notebook')
            ->orderBy('id_carrinho')
            ->orderBy('id')
            ->get();

        return view('contagem_notebooks', compact(
            'notebooks',
            'total',
            'disponiveis',
            'emUso',
            'carrinhos'
        ));
    }
}
