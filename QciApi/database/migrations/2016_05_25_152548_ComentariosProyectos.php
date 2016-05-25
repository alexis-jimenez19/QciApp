<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComentariosProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProyecto')->unsigned();
            $table->integer('idUsuario')->unsigned();
            $table->string('comentario');
            $table->timestamps();
            
            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->foreign('idProyecto')->references('id')->on('proyectos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentarios_proyectos');
    }
}
