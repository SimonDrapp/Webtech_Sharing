<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');

            $table->string("firstname", 100)->default("");
            $table->string("lastname", 100);
            $table->string("email", 100);
            $table->string("mobile", 50)->nullable();
            $table->string("subject", 50);
            $table->longText("message");

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
        Schema::dropIfExists('notifications');
    }
}
