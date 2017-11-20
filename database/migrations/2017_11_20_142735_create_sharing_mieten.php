<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingMieten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mieten', function (Blueprint $table) {
            $table->increments('id');
            $table->date('von');
            $table->date('bis');
            $table->Integer('idBenutzer')->unsigned();
            $table->Integer('idVermieten')->unsigned();
            $table->foreign('idBenutzer')->references('id')->on('Benutzer');
            $table->foreign('idVermieten')->references('id')->on('Vermieten');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE Vermieten ADD CONSTRAINT check_date_mieten CHECK (von<bis);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mieten');
    }
}
