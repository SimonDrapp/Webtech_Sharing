<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingFahrradvermietung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fahrradvermietung', function (Blueprint $table) {
            $table->increments('id');
            $table->String('art');
            $table->String('marke');
            $table->String('modell');
            $table->String('farbe');
            $table->decimal('preis');
            $table->String('bild');
            $table->String('details');
            $table->String('postleitzahl');
            $table->String('ort');
            $table->String('strasseNr');
            $table->String('startdate');
            $table->String('enddate');
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
        Schema::dropIfExists('fahrradvermietung');
    }
}
