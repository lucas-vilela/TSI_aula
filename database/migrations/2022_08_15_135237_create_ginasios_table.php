<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGinasiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ginasios', function (Blueprint $table) {
            $table->integer('id_ginasio', true);
            $table->string('nome', 100);
            $table->string('img_capa', 500);
            $table->string('telefone', 100);
            $table->string('cep', 100);
            $table->date('data_registro');
            $table->boolean('bebidas')->nullable();
            $table->boolean('area_kids')->nullable();
            $table->boolean('wifi')->nullable();
            $table->integer('qtd_vestiarios')->nullable();
            $table->boolean('estacionamento')->nullable();
            $table->boolean('churrasqueira')->nullable();
            $table->integer('qtd_banheiros')->nullable();
            $table->boolean('tv_assinatura')->nullable();
            $table->boolean('arquibancada')->nullable();
            $table->boolean('lanches')->nullable();
            $table->integer('id_user')->nullable()->index('id_user');
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
        Schema::dropIfExists('ginasios');
    }
}
