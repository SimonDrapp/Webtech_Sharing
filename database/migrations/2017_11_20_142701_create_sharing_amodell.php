<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingAmodell extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AModell', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->Integer('idAmarke')->unsigned();
            $table->Integer('idKraftstoff')->unsigned();
            $table->Integer('idBaujahr')->unsigned();
            $table->foreign('idAmarke')->references('id')->on('AMarke');
            $table->foreign('idKraftstoff')->references('id')->on('Kraftstoff');
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
        Schema::dropIfExists('AModell');
    }
}
