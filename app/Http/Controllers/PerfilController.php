<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Perfil;

class PerfilController extends Controller
{
    public function perfil()
    {
        return view('perfil.perfil');
    }

    public function cadastro_telefone(Request $request)
    {
        $id = Auth::user()->id;

        $telefone = $request->validate([
            'telefone' => 'required|min:10|max:11'
        ]);

        $cadastro = new Perfil();
        $cadastro->cadastra_telefone($id, $request->telefone);

        if($cadastro){
            echo 'sucesso';
        }

    }
}
