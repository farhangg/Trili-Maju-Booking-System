<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('USERNAME');
            $table->string('CONTAINER20');
            $table->string('CONTAINER40');
            $table->string('TOTALCONTAINER');
            $table->date('CHOSENDATE');
            $table->string('STATUS');
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
        Schema::dropIfExists('booking');
    }
}
