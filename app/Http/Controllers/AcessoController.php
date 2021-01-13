<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AcessoController extends Controller
{
    public function Verifica_logado()
    {
        $empresa = DB::select(
            'SELECT * FROM empresas WHERE user_id = :user',
            ['user' => Auth::user()->id]
        );

        $administrador = DB::select(
            'SELECT * FROM administradores WHERE user_id = :user',
            ['user' => Auth::user()->id]
        );

        if ($empresa) {
            return redirect('/empresa/home');
            die();
         }  
        if ($administrador) {
           return redirect('/administrador/home');
           die();
        } 

         return redirect('/usuario/home');
    }
}
