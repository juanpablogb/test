<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaHabilidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidades', function (Blueprint $table) {
			$table->increments('id');
			$table->string('habiliadad',255);
		    $table->integer('asistente_id')->unsigned();
			$table->foreign('asistente_id')->references('id')->on('users');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

		Schema::drop('habilidades');
            //

    }
}
