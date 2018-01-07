<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingBilder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bilder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->integer('idAuto')->unsigned()->nullable();
            $table->integer('idFahrrad')->unsigned()->nullable();
            $table->foreign('idAuto')->references('id')->on('Auto');
            $table->foreign('idFahrrad')->references('id')->on('Fahrrad');
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
        Schema::dropIfExists('Bilder');
    }
}
