<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('consulting_room');
            $table->string('phone');
            $table->string('celphone');
            $table->integer('especialidades_id')->unsigned();
            $table->timestamps();

            /**
             *Llave Foranea
             */
            $table->foreign('especialidades_id')
              ->references('id')
              ->on('specialties');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
