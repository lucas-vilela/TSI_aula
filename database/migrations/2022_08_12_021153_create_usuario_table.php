<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id_user', true);
            $table->string('nome', 100)->nullable();
            $table->integer('permissao')->nullable();
            $table->string('senha', 100)->nullable();
            $table->string('img_perfil', 100)->nullable();
            $table->string('telefone', 100)->nullable();
            $table->string('e_mail', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
