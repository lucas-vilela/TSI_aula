<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->integer('id_avaliacao', true);
            $table->string('comentario', 500)->nullable();
            $table->integer('id_user')->nullable()->index('id_user');
            $table->integer('id_quadra')->nullable()->index('id_quadra');
            $table->dateTime('data')->nullable();
            $table->string('nota', 100)->nullable();
            $table->boolean('situacao')->nullable();
            $table->boolean('tipo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacoes');
    }
}
