<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFxAutovermietung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autovermietung', function (Blueprint $table) {
            $table->increments('id');
            $table->String('marke');
            $table->String('modell');
            $table->String('baujahr');
            $table->String('farbe');
            $table->String('kraftstoff');
            $table->String('preis');
            $table->String('bild');
            $table->String('details')->nullable();
            $table->String('postleitzahl');
            $table->String('ort');
            $table->String('strasseNr');
            $table->date('startdate');
            $table->date('enddate');
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
        Schema::dropIfExists('autovermietung');
    }
}
