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
            return $telefones;

    }

    public function deleta_telefone($id, $telefone_id)
    {
        $telefones = DB::delete(
            'DELETE FROM telefones WHERE id = :telefone_id AND user_id = :user_id',
            ['telefone_id' => $telefone_id,
            'user_id' => $id]
        );

            return $telefones;
    }

    public function cadastra_experiencia($id, $cargo, $local, $descricao, $data)
    {
        $cadastro = DB::insert(
            'INSERT INTO experiencias (user_id, cargo, local, descricao, data) VALUES ( :id , :cargo , :local , :descricao , :data )',[
                'id' => $id,
                'cargo' => $cargo,
                'local' => $local,
                'descricao' => $descricao,
                'data' => $data
                ]);

        return $cadastro;
    }

    public function show_experiencia($id)
    {
        $experiencia = DB::select(
            'SELECT id, cargo, local, descricao, data FROM experiencias WHERE user_id = :id',
            ['id' => $id]
        );
            return $experiencia;

    }

    public function deleta_experiencia($id, $experiencia_id)
    {
        $experiencia = DB::delete(
            'DELETE FROM experiencias WHERE id = :experiencia_id AND user_id = :user_id',
            ['experiencia_id' => $experiencia_id,
            'user_id' => $id]
        );

            return $experiencia;
    }

}
