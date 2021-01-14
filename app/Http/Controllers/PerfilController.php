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
        $id = Auth::user()->id;
        $nome = Auth::user()->name;
        $email = Auth::user()->email;
        
        $telefones = new Perfil();
        $numeros = $telefones->show_telefone($id);

        
        // dd($numeros);
        return view('usuario.perfil', [
            'telefones' => $numeros,
            'nome' => $nome,
            'email' => $email, 
            'experiencias' => ['nenhuma experiência cadastrada','nenhuma experiência cadastrada'],
            
            ]); 
    }

    public function telefone_view()
    {   
        return view('usuario.telefone');
    }
    
    public function cadastro_telefone(Request $request)
    {
        $id = Auth::user()->id;

        $telefone = $request->validate([
            'telefone' => 'required|min:10|max:11'
        ]);

        $cadastro = new Perfil();
        $cadastrado = $cadastro->cadastra_telefone($id, $request->telefone);

        if($cadastrado){
            return redirect('usuario/perfil');
        }

    }

    public function remover_telefone(Request $request)
    {
        $id = Auth::user()->id;
        $telefone_id = $request->telefone;

        $deleta = new Perfil();
        $deletado = $deleta->deleta_telefone($id, $telefone_id);
      
        if($deletado){
            return redirect('usuario/perfil');
        }
    }
}
