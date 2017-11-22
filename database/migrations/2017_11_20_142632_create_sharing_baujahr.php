<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingBaujahr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Baujahr', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('jahr');
            $table->timestamps();
        });
        DB::update("ALTER TABLE Baujahr AUTO_INCREMENT=100");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Baujahr');
    }
}
