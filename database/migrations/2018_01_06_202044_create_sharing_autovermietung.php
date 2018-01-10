<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingAutovermietung extends Migration
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
            $table->string('automarke');
            $table->String('automodell');
            $table->String('autobaujahr');
            $table->String('autofarbe');
            $table->String('autokraftstoff');
            $table->String('autopreis');
            $table->String('autobild');
            $table->String('autodetails');
            $table->String('autopostleitzahl');
            $table->String('autoort');
            $table->String('autostrasseNr');
            $table->date('autostartdate');
            $table->date('autoenddate');
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
