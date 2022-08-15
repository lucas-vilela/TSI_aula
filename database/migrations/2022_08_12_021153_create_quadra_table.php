<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuadraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadra', function (Blueprint $table) {
            $table->integer('id_quadra', true);
            $table->string('nome_quadra', 100)->nullable();
            $table->integer('id_ginasio')->nullable()->index('id_ginasio');
            $table->integer('id_esporte')->nullable()->index('id_esporte');
            $table->string('dimensoes', 100)->nullable();
            $table->string('piso', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quadra');
    }
}
