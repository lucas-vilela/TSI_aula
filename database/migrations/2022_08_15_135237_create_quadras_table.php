<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuadrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadras', function (Blueprint $table) {
            $table->integer('id_quadra', true);
            $table->string('nome_quadra', 100);
            $table->string('dimensoes', 100);
            $table->string('img_capa', 500);
            $table->string('piso', 100);
            $table->integer('id_ginasio')->nullable()->index('id_ginasio');
            $table->integer('id_esporte')->nullable()->index('id_esporte');
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
        Schema::dropIfExists('quadras');
    }
}
