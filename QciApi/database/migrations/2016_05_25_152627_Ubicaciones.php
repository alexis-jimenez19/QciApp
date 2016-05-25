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
            $table->integer('idCentroUniversitario')->unsigned();
            $table->integer('idTipoUbicacion')->unsigned();
            $table->timestamps();

            $table->foreign('idCentroUniversitario')->references('id')->on('centros_universitarios');
            $table->foreign('idTipoUbicacion')->references('id')->on('tipos_ubicaciones');
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
