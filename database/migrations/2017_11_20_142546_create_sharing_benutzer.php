<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingBenutzer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Benutzer', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->String('vorname');
            $table->String('email')->unique();
            $table->String('telefonnummer');
            $table->String('passwort');
            $table->Integer('idAdresse')->unsigned();
            $table->foreign('idAdresse')->references('id')->on('Adresse')->onDelete('cascade');
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
        Schema::dropIfExists('Benutzer');
    }
}
