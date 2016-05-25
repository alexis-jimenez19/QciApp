<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->string('nombreCompleto')->nullable();
            $table->string('foto')->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('semestre')->nullable();
            $table->integer('carrera_id')->unsigned();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('googleplus')->nullable();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('carrera_id')->references('id')->on('carreras');
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
        Schema::drop('perfiles');
    }
}
