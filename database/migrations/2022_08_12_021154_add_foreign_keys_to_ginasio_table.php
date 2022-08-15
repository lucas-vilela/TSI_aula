<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGinasioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ginasio', function (Blueprint $table) {
            $table->foreign(['id_user'], 'ginasio_ibfk_1')->references(['id_user'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ginasio', function (Blueprint $table) {
            $table->dropForeign('ginasio_ibfk_1');
        });
    }
}
