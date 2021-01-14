<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $vaga = new empresa();
        $salva = $vaga->store_vaga($empresa_id, $request->cargo, $request->descricao, $request->local_de_trabalho, $request->tipo_de_contratacao, $request->expiracao, $request->salario, $request->link_de_vaga);
        dd($salva); 
    }


}
