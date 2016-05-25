<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mapas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->integer('centrouniversitario_id')->unsigned();
            $table->timestamps();
            $table->foreign('centrouniversitario_id')->references('id')->on('centros_universitarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mapas');
    }
}
