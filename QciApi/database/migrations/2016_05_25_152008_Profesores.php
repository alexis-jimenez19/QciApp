<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable();
            $table->string('nombre');
            $table->string('division');
            $table->string('correo')->nullable();
            $table->string('ubicacionOficina')->nullable();
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
        Schema::drop('profesores');
    }
}
