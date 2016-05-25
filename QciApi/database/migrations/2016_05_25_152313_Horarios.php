<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idCalendario')->unsigned();
            $table->string('materia');
            $table->string('inicialesMateria');
            $table->string('profesor');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->string('edificioSalon');
            $table->integer('calificacion')->nullable();
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->foreign('idCalendario')->references('id')->on('calendarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('horarios');
    }
}
