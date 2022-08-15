<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('avaliacoes', function (Blueprint $table) {
            $table->foreign(['id_quadra'], 'avaliacoes_ibfk_2')->references(['id_quadra'])->on('quadras');
            $table->foreign(['id_user'], 'avaliacoes_ibfk_1')->references(['id_user'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avaliacoes', function (Blueprint $table) {
            $table->dropForeign('avaliacoes_ibfk_2');
            $table->dropForeign('avaliacoes_ibfk_1');
        });
    }
}
