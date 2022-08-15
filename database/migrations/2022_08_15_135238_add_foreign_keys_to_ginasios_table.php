<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGinasiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ginasios', function (Blueprint $table) {
            $table->foreign(['id_user'], 'ginasios_ibfk_1')->references(['id_user'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ginasios', function (Blueprint $table) {
            $table->dropForeign('ginasios_ibfk_1');
        });
    }
}
