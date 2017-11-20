<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingAdresse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adresse', function (Blueprint $table) {
            $table->increments('id');
            $table->string('straße_hausnummer');
            $table->string('plz');
            $table->integer('ortID')->unsigned();
            $table->foreign('ortID')->references('id')->on('Ort');
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
        Schema::dropIfExists('Adresse');
    }
}
