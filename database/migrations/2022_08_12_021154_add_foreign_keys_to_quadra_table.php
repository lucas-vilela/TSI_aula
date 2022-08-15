<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQuadraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quadra', function (Blueprint $table) {
            $table->foreign(['id_esporte'], 'quadra_ibfk_2')->references(['id_esporte'])->on('esportes');
            $table->foreign(['id_ginasio'], 'quadra_ibfk_1')->references(['id_ginasio'])->on('ginasio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quadra', function (Blueprint $table) {
            $table->dropForeign('quadra_ibfk_2');
            $table->dropForeign('quadra_ibfk_1');
        });
    }
}
