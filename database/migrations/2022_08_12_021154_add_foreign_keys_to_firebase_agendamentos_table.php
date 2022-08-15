<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFirebaseAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('firebase_agendamentos', function (Blueprint $table) {
            $table->foreign(['id_user'], 'firebase_agendamentos_ibfk_2')->references(['id_user'])->on('usuario');
            $table->foreign(['id_horario'], 'firebase_agendamentos_ibfk_1')->references(['id_horario'])->on('horarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('firebase_agendamentos', function (Blueprint $table) {
            $table->dropForeign('firebase_agendamentos_ibfk_2');
            $table->dropForeign('firebase_agendamentos_ibfk_1');
        });
    }
}
