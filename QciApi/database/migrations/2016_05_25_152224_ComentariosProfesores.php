<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComentariosProfesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profesormateria_id')->unsigned();
            $table->mediumText('comentario');
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();

            $table->foreign('profesormateria_id')->references('id')->on('profesor_materia');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentarios_profesores');
    }
}
