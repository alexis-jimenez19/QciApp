<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nombreEquipo');
            $table->string('descripcion');
            $table->integer('idUsuarioLider')->unsigned();
            $table->integer('idCentroUniversitario')->unsigned();
            $table->timestamps();

            $table->foreign('idUsuarioLider')->references('id')->on('usuarios');
            $table->foreign('idCentroUniversitario')->references('id')->on('centros_universitarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proyectos');
    }
}
