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
            $table->string('nota', 100);
            $table->string('comentario', 500);
            $table->dateTime('data');
            $table->boolean('situacao');
            $table->boolean('tipo');
            $table->integer('id_user')->nullable()->index('id_user');
            $table->integer('id_quadra')->nullable()->index('id_quadra');
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
        Schema::dropIfExists('avaliacoes');
    }
}
