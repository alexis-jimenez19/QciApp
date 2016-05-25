<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CentrosUniversitarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_universitarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('siglas');
            $table->unique(['nombre','siglas']);
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
        Schema::drop('centros_universitarios');
    }
}
