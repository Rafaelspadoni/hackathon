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
        
        $perfil = new Perfil();
        $numeros = $perfil->show_telefone($id);
        $experiencias = $perfil->show_experiencia($id);
        $certificacoes = $perfil->show_certificacao($id);


        return view('usuario.perfil', [
            'telefones' => $numeros,
            'nome' => $nome,
            'email' => $email, 
            'experiencias' => $experiencias,
            'certificacoes' => $certificacoes,
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

    public function cadastro_experiencia()
    {
        return view('usuario.experiencia');
    }

    public function guarda_experiencia(Request $request)
    {
        $id = Auth::user()->id;

        $validacao = $request->validate([
            'cargo' => 'required|min:5|max:50|string',
            'local' => 'required|min:5|max:50|string',
            'descricao' => 'required|min:5|max:200|string',
            'data' => 'required|date_format:Y-m-d'
        ]);

        $experiencia = new Perfil();
        $cadastrado = $experiencia->cadastra_experiencia($id, $request->cargo, $request->local, $request->descricao, $request->data);
        
        if($cadastrado){
            return redirect('usuario/perfil');
        }
    }
    public function remover_experiencia(Request $request)
    {
        $id = Auth::user()->id;
        $experiencia_id = $request->experiencia;

        $deleta = new Perfil();
        $deletado = $deleta->deleta_experiencia($id, $experiencia_id);
      
        if($deletado){
            return redirect('usuario/perfil');
        }
    }

    public function cadastro_certificacao()
    {
        return view('usuario.certificacao');
    }

    public function guarda_certificacao(Request $request)
    {
        $id = Auth::user()->id;

        $validacao = $request->validate([
            'nome' => 'required|min:5|max:50|string',
            'descricao' => 'min:5|max:150|string',
            'certificadora' => 'required|min:5|max:200|string',
            'concessao' => 'required|date_format:Y-m-d',
            'link_da_certificacao' => 'min:5|max:200|string',
        ]);

        $certificacao = new Perfil();
        $cadastrado = $certificacao->cadastra_certificacao($id, $request->nome, $request->descricao, $request->certificadora, $request->concessao, $request->link_da_certificacao);
        
        if($cadastrado){
            return redirect('usuario/perfil');
        }
    }
    public function remover_certificacao(Request $request)
    {
        $id = Auth::user()->id;
        $certificacao_id = $request->certificacao;

        $deleta = new Perfil();
        $deletado = $deleta->deleta_certificacao($id, $certificacao_id);
      
        if($deletado){
            return redirect('usuario/perfil');
        }
    }

}
