<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirebaseAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firebase_agendamentos', function (Blueprint $table) {
            $table->boolean('status');
            $table->dateTime('log_agendamento');
            $table->integer('id_user')->nullable()->index('id_user');
            $table->integer('id_horario')->nullable()->index('id_horario');
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
        Schema::dropIfExists('firebase_agendamentos');
    }
}
