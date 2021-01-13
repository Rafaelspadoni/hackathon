<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class e_usuario 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $e_empresa = DB::select(
            'SELECT * FROM empresas WHERE user_id = :user',
            ['user' => Auth::user()->id]
        );

        $e_administrador = DB::select(
            'SELECT * FROM administradores WHERE user_id = :user',
            ['user' => Auth::user()->id]
        );

        if ($e_empresa OR $e_administrador) {
           return redirect('/verifica');
        }   
        return $next($request);
    }
}
