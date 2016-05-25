<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ValoracionesProfesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoraciones_profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('profesormateria_id')->unsigned();
            $table->integer('valoracion');

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('profesormateria_id')->references('id')->on('profesor_materia');
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
        Schema::drop('valoraciones_profesores');
    }
}
