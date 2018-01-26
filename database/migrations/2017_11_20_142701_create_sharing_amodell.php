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
        Schema::create('amodell', function (Blueprint $table) {
            $table->increments('id');
            $table->String('aModellname');
            $table->Integer('idAmarke')->unsigned();
            $table->Integer('idKraftstoff')->unsigned();
            $table->foreign('idAmarke')->references('id')->on('amarke');
            $table->foreign('idKraftstoff')->references('id')->on('kraftstoff');
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
        Schema::dropIfExists('amodell');
    }
}
