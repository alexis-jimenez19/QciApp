<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ubicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('foto');
            $table->integer('centro_universitario_id')->unsigned();
            $table->integer('tipoubicacion_id')->unsigned();
            $table->timestamps();

            $table->foreign('centro_universitario_id')->references('id')->on('centros_universitarios');
            $table->foreign('tipoubicacion_id')->references('id')->on('tipos_ubicaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ubicaciones');
    }
}
