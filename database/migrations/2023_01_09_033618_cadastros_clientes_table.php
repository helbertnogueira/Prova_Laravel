<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cpf_cnpj',18);
            $table->string('nome_razao_social',100);
            $table->string('rg',12);
            $table->string('ie',18);
            $table->string('rua_avenida',100);
            $table->string('numero',8);
            $table->string('bairro',20);
            $table->string('cep',9);
            $table->string('complemento',25);
            $table->string('cidade',25);
            $table->string('estado',25);
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
        Schema::dropIfExists('');
    }
};
