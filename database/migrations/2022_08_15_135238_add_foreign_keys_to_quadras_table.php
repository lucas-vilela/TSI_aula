<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQuadrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quadras', function (Blueprint $table) {
            $table->foreign(['id_esporte'], 'quadras_ibfk_2')->references(['id_esporte'])->on('esportes');
            $table->foreign(['id_ginasio'], 'quadras_ibfk_1')->references(['id_ginasio'])->on('ginasios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quadras', function (Blueprint $table) {
            $table->dropForeign('quadras_ibfk_2');
            $table->dropForeign('quadras_ibfk_1');
        });
    }
}
