<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class empresa extends Model
{
    use HasFactory;


    public function cadastra_empresa($id,$localidade)
    {
        $cadastro = DB::insert(
            'INSERT INTO empresas (user_id, localidade) VALUES (:id, :localidade )',
            ['id' => $id, 'localidade' => $localidade]
        );

        if($cadastro)
        {
            return true; 
        }else{
            return false;
        }

    }
    public function deleta_empresa($id)
    {
        $deleta = DB::delete(
        'DELETE FROM empresas WHERE user_id = :id ',
        ['id' => $id,]
        );

    }
}
