<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComentariosUbicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_ubicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ubicacion_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->string('comentario');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentarios_ubicaciones');
    }
}
