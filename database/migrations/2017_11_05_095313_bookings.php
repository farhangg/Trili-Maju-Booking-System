<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CompanyName');
            $table->string('Container20');
            $table->string('Container40');
            $table->string('TotalContainer');
            $table->string('BookingReference');
            $table->string('Commodity');
            $table->string('Liner');
            $table->string('VesselName');
            $table->date('VesselETA');
            $table->time('ClosingTime');
            $table->date('ChosenDate');
            $table->string('PickUpDepot');
            $table->string('ContainerNo');
            $table->string('Remarks');
            $table->string('Status');
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
        Schema::dropIfExists('bookings');
    }
}
