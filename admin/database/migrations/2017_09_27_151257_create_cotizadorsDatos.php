<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizadorsDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizadorsDatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estudio_sub');
            $table->string('precio');
            $table->string('incluye');
            $table->string('no_incluye');
            $table->string('descripcion');
            $table->integer('cotizador_id')->unsigned();
            $table->timestamps();

            /**
             *Llave Foranea
             */
            $table->foreign('cotizador_id')
              ->references('id')
              ->on('cotizadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizadorsDatos');
    }
}
