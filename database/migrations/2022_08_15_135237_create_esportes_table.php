<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esportes', function (Blueprint $table) {
            $table->integer('id_esporte', true);
            $table->string('modalidade', 100);
            $table->string('desc_modalidade', 100);
            $table->string('nr_jogadores', 100);
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
        Schema::dropIfExists('esportes');
    }
}
