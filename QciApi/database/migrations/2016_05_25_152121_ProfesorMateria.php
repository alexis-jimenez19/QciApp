<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfesorMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor_materia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profesor_id')->unsigned();
            $table->string('materia');

            $table->foreign('profesor_id')->references('id')->on('profesores');
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
        Schema::drop('profesor_materia');
    }
}
