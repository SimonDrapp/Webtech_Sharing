<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingVermieten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vermieten', function (Blueprint $table) {
            $table->increments('id');
            $table->float('preis');
            $table->date('von');
            $table->date('bis');
            $table->Integer('idAuto')->unsigned()->nullable();
            $table->Integer('idFahrrad')->unsigned()->nullable();
            $table->Integer('idBenutzer')->unsigned();
            $table->foreign('idAuto')->references('id')->on('Auto')->onDelete('cascade');
            $table->foreign('idFahrrad')->references('id')->on('Fahrrad')->onDelete('cascade');
            $table->foreign('idBenutzer')->references('id')->on('Benutzer');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE Vermieten ADD CONSTRAINT check_date_vermieten CHECK (von<bis);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vermieten');
    }
}
