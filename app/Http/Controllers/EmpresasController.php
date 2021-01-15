<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\empresa;



class EmpresasController extends Controller
{
    
    public function empresa_home()
    {
        return view('empresas.empresa');
    }

    public function cadastrar_vaga()
    {
        return view('empresas.cadastra_vagas');
    }
    
    public function guarda_vagas(Request $request)
    {
        $empresa_id = Auth::user()->id;
        $cargo = $request->cargo;
        $descricao = $request->descricao;
        $local_de_trabalho = $request->local_de_trabalho;
        $tipo_de_contratacao = $request->tipo_de_contratacao;
        $expiracao = $request->expiracao;
        $salario = $request->salario;
        $link_de_vaga = $request->link_de_vaga;

        $vagas = $request->validate([
            'cargo' => 'required|string|min:5|max:80',
            'descricao' => 'required|string|min:125|max:250',
            'local_de_trabalho' => 'required|string|min:25|max:150',
            'tipo_de_contratacao' => 'required',
            'expiracao' => 'required|date',
            'salario' => 'string|nullable',
            'link_de_vaga' => 'url'
        ]);

        $vaga = new empresa();

        $guarda = $vaga->store_vaga($empresa_id, $cargo, $descricao, $local_de_trabalho, $tipo_de_contratacao, $expiracao, $salario, $link_de_vaga);

        if($guarda){

        }

    }


}
