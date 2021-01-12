<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class e_empresa
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
        $empresa = DB::select(
            'SELECT * FROM empresas WHERE user_id = :user',
            ['user' => Auth::user()->id]
        );

        if (!$empresa) {
           return redirect('/verifica');
        }   
        return $next($request);
    }
}
