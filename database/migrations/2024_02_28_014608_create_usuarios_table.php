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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('identidade');
            $table->date('data_nascimento');
            $table->string('naturalidade');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->date('data_emissao');
            $table->date('data_validade');
            $table->char('sexo');
            $table->string('estado_civil');
            $table->string('altura');
            $table->string('residencia');
            $table->string('provincia');
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
        Schema::dropIfExists('usuarios');
    }
};
