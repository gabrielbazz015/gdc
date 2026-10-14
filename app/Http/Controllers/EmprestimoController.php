<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimo;

class EmprestimoController extends Controller
{
    public function index()
    {
        $emprestimos = Emprestimo::orderBy('data_retirada', 'desc')->get();

        return view('emprestimo', compact('emprestimos'));
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'id_usuario' => ['required', 'exists:usuario,id'],
            'id_responsavel' => ['required', 'exists:responsavel,id'],
            'id_carrinho' => ['required', 'exists:carrinho,id'],
            'data' => ['required', 'date'],
            'hora' => ['required'],
            'finalidade' => ['required', 'string', 'max:255'],
        ]);

        // Monta a data e o horário da retirada
        $dataRetirada = $dados['data'] . ' ' . $dados['hora'] . ':00';

        // Verifica se o carrinho já está reservado
        $carrinhoOcupado = Emprestimo::where(
            'id_carrinho',
            $dados['id_carrinho']
        )
            ->where('data_retirada', $dataRetirada)
            ->whereIn('status', ['Solicitado', 'Aprovado'])
            ->exists();

        // Se estiver ocupado, não cria o empréstimo
        if ($carrinhoOcupado) {
            return back()
                ->withErrors([
                    'data' => 'Este carrinho já está reservado para esta data e horário.'
                ])
                ->withInput();
        }

        // Cria o empréstimo
        Emprestimo::create([
            'id_usuario' => $dados['id_usuario'],
            'id_responsavel' => $dados['id_responsavel'],
            'id_carrinho' => $dados['id_carrinho'],
            'data_retirada' => $dataRetirada,
            'finalidade' => $dados['finalidade'],
            'status' => 'Solicitado',
        ]);

        return redirect()->route('emprestimo.confirmacao');
    }
}
