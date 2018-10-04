<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailableTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_times', function (Blueprint $table) {
            $table->increments('time_id');
            $table->dateTime('a_start_time');
            $table->dateTime('a_end_time');
            $table->timestamps();
        });
        
        Schema::table('available_times', function (Blueprint $table) {
            $table->unsignedInteger('barber_id');
            $table->foreign('barber_id')->references('id')->on('barbers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_times');
    }
}
