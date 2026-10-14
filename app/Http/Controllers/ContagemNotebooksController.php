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

        // Lista dos notebooks
        $notebooks = DB::table('notebook')
            ->orderBy('id_carrinho')
            ->orderBy('id')
            ->get();

        // Contagem REAL dos notebooks no banco
        $total = DB::table('notebook')->count();

        // Notebooks disponíveis
        $disponiveis = DB::table('notebook')
            ->where('status', 'disponivel')
            ->count();

        // Notebooks que não estão disponíveis
        $emUso = DB::table('notebook')
            ->where('status', '!=', 'disponivel')
            ->count();

        return view('contagem_notebooks', compact(
            'notebooks',
            'total',
            'disponiveis',
            'emUso',
            'carrinhos'
        ));
    }
}
