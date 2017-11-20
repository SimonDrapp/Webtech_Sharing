<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingFahrrad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fahrrad', function (Blueprint $table) {
            $table->increments('id');
            $table->String('details');
            $table->integer('idModell')->unsigned();
            $table->integer('idFarbe')->unsigned();
            $table->foreign('idModell')->references('id')->on('FModell');
            $table->foreign('idFarbe')->references('id')->on('Farbe');
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
        Schema::dropIfExists('Fahrrad');
    }
}
