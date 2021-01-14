<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class empresa extends Model
{
    use HasFactory;


    public function store_vaga($empresa_id, $cargo, $descricao, $local_de_trabalho, $tipo_de_contratacao, $expiracao, $salario, $link_da_vaga)
    {
        $empresa_id = $_GET['empresa_id'];
        $cargo = $_POST['cargo'];
        $descricao = $_POST['descricao'];
        $local_de_trabalho = $_POST['local_de_trabalho'];
        $tipo_de_contratacao = $_POST['tipo_de_contratacao'];
        $expiracao = $_POST['expiracao'];
        $salario = $_POST['salario'];
        $link_da_vaga = $_POST['link_da_vaga'];
        
        DB::transaction(function () { 
         DB::insert('INSERT INTO vagas (empresa_id, cargo, descricao, local_de_trabalho, tipo_de_contratacao, expiracao, salario, link_da_vaga) VALUES
             (:empresa_id, :cargo, :descricao, :local_de_trabalho, :tipo_de_contratacao, :expiracao, :salario, :link_da_vaga)',
        ['empresa_id' => $empresa_id, 
        'cargo '=> $cargo, 
        'descricao' => $descricao, 
        'local_de_trabalho' => $local_de_trabalho, 
        'tipo_de_contratacao' => $tipo_de_contratacao, 
        'expiracao' => $expiracao, 
        'salario' => $salario, 
        'link_de_vaga' => $link_da_vaga]

        );
        }
    );
}
    




        
    

