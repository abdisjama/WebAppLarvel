<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');            
            $table->timestamps();
        });
    
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedInteger('barber_id');
            $table->unsignedInteger('service_id');
            $table->unsignedInteger('user_id');
            
            $table->foreign('barber_id')->references('id')->on('barbers');
            $table->foreign('service_id')->references('service_id')->on('services');
            $table->foreign('user_id')->references('id')->on('users');
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
