<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class e_administrador
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
        $administrador = DB::select(
            'SELECT * FROM administradores WHERE user_id = :user',
            ['user' => Auth::user()->id]
        );

        if (!$administrador) {
           return redirect('/verifica');
        }   
        return $next($request);
    }
}
