<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Perfil extends Model
{
    use HasFactory;


    public function cadastra_telefone($id, $telefone)
    {
        $cadastro = DB::insert(
            'INSERT INTO telefones (user_id, telefone) VALUES ( :id , :telefone )',
            ['id' => $id, 'telefone' => $telefone]
        );

        if($cadastro){
            return true;
        }else{
            return false;
        }
    }

    public function show_telefone($id)
    {
        $telefones = DB::select(
            'SELECT id, telefone FROM telefones WHERE user_id = :id',
            ['id' => $id]
        );

        if(!$telefones)
        {
            echo 'nenhum telefone cadastrado';

        }else
        {  
            return $telefones;
        }
    }

    public function deleta_telefone($id, $telefone_id)
    {
        $telefones = DB::delete(
            'DELETE FROM telefones WHERE id = :telefone_id AND user_id = :user_id',
            ['telefone_id' => $telefone_id,
            'user_id' => $id]
        );

        if(!$telefones)
        {
            echo 'nenhum telefone cadastrado';

        }else
        {  
            return $telefones;
        }
    }

}
