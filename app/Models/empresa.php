<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class empresa extends Model
{
    use HasFactory;


    public function store_vaga($empresa_id , $cargo , $descricao , $local_de_trabalho , $tipo_de_contratacao , $expiracao , $salario , $link_da_vaga)
    {
    
        $store = DB::insert(
        'INSERT INTO vagas (empresa_id , cargo , descricao , local_de_trabalho , tipo_de_contratacao , expiracao , salario , link_da_vaga) VALUES (:empresa_id , :cargo , :descricao , :local_de_trabalho , :tipo_de_contratacao , :expiracao , :salario , :link_da_vaga)',
        [   'empresa_id' => $empresa_id, 
            'cargo' => $cargo, 
            'descricao' => $descricao, 
            'local_de_trabalho' => $local_de_trabalho, 
            'tipo_de_contratacao' => $tipo_de_contratacao, 
            'expiracao' => $expiracao, 
            'salario' => $salario, 
            'link_da_vaga' => $link_da_vaga
        ]);

        return $store;

    } 

    public function show_vagas($empresa_id)
    {
        $vagas = DB::select(
            'SELECT vagas.id, vagas.cargo, vagas.descricao, vagas.local_de_trabalho, tipo_de_contratacao.periodo, vagas.expiracao, vagas.salario, vagas.link_da_vaga FROM vagas INNER JOIN tipo_de_contratacao ON tipo_de_contratacao.id = vagas.tipo_de_contratacao WHERE empresa_id = :empresa_id',
            ['empresa_id' => $empresa_id]
        );
        
        return $vagas;

    }
    public function deleta_vaga($id, $vaga_id)
    {
        $vaga = DB::delete(
            'DELETE FROM vagas WHERE id = :vaga_id AND empresa_id = :user_id',
            ['vaga_id' => $vaga_id,
            'user_id' => $id]
        ); 

            return $vaga;
    }


}



        
    

