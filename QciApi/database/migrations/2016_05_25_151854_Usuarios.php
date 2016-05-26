<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreU');
            $table->string('correoU');
            $table->string('passwordU');
            $table->unique(['nombreU','correoU']);
            $table->integer('centro_universitario_id')->unsigned();
            
            $table->foreign('centro_universitario_id')->references('id')->on('centros_universitarios');
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
        Schema::drop('usuarios');
    }
}
