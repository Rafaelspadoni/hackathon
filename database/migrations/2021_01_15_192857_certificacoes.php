<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Certificacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('certificadora');
            $table->date('concessao');
            $table->string('link_da_certificacao');
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
        Schema::dropIfExist('certificacoes');
    }
}
