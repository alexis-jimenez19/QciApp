<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Noticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->date('fecha');
            $table->longText('descripcion');
            $table->string('imagen');
            $table->integer('vistas');
            $table->string('ubicacion')->nullable();
            $table->integer('idautor')->nullable();
            $table->integer('centrouniversitario_id')->unsigned();

            $table->foreign('centrouniversitario_id')->references('id')->on('centros_universitarios');
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
        Schema::drop('noticias');
    }
}
