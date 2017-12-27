<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingFmarke extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FMarke', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->integer('idArt')->unsigned();
            $table->foreign('idArt')->references('id')->on('Art');
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
        Schema::dropIfExists('FMarke');
    }
}
