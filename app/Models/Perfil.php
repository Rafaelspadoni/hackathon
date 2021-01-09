<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Perfil extends Model
{
    use HasFactory;

    public $telefone;

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
}
