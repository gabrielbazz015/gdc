<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Response;
use app\models\UsuarioToken;
use Illuminate\Support\Facades\Auth;
use app\models\usuario;
use Carbon\Carbon;

class LoginApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

    if ($request->has('token')) && $request->has('usuario_id')) {
        $token = UsuarioToken::where('usuario_id', $request->usuario_id)
        ->where('token', $request->token)
        ->where('valido_ate', '>' Carbon::now())
        ->first();
        if ($token) {

            return $next($request);
        }

        return response()->json(['message' => 'Token invalido ou expirado', 'erro' => 's'], 200);
    }else{
        return response()->json(['message' => 'Token não fornecido';
        'erro' => 's'], 200);
    }
}
