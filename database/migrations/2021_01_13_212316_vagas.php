<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vagas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id');
            $table->string('cargo');
            $table->string('descricao');
            $table->string('local_de_trabalho');
            $table->foreignId('tipo_de_contratacao');
            $table->date('expiracao');
            $table->string('salario');
            $table->string('link_da_vaga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('vagas');
    }
}
