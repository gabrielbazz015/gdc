<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\UsuarioToken;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    public function cadastro_html()
    {
        return view('cadastro_usuario');
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

        Usuario::create($dados);

        return redirect()
            ->route('login')
            ->with('sucesso', 'Conta criada com sucesso!');
    }

    public function login(Request $request)
    {
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required', 'string'],
        ]);

        $usuario = Usuario::where('email', $dados['email'])->first();

        if (!$usuario || !Hash::check($dados['senha'], $usuario->senha)) {
            return response()->json([
                'message' => 'Usuário ou senha incorretos.'
            ], 401);
        }

        $token = Str::random(80);

        UsuarioToken::create([
            'usuario_id' => $usuario->id,
            'token' => hash('sha256', $token),
            'valido_ate' => now()->addDays(7),
        ]);

        return response()->json([
            'message' => 'Login realizado com sucesso!',
            'token' => $token,
            'usuario' => [
                'id' => $usuario->id,
                'nome' => $usuario->nome,
                'email' => $usuario->email,
                'tipo' => $usuario->tipo,
            ],
        ], 200);
    }
}
