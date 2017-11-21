<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingAuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Auto', function (Blueprint $table) {
            $table->increments('id');
            $table->String('details');
            $table->Integer('idFarbe')->unsigned();
            $table->Integer('idAmodell')->unsigned();
            $table->Integer('idBaujahr')->unsigned();
            $table->foreign('idFarbe')->references('id')->on('Farbe');
            $table->foreign('idAmodell')->references('id')->on('AModell');
            $table->foreign('idBaujahr')->references('id')->on('Baujahr');
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
        Schema::dropIfExists('Auto');
    }
}
