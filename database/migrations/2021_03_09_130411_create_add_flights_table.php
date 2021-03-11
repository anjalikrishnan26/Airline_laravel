<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_flights', function (Blueprint $table) {
            $table->id();
            $table->string('airlinename');
            $table->string('departure');
            $table->string('arrival');
            $table->date('date');
            $table->time('dtime');
            $table->time('atime');
            $table->integer('seatcapacity');
            $table->integer('business');
            $table->string('economy');
            $table->string('first');
            $table->string('bcost');
            $table->string('ecost');
            $table->string('fcost');
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
        Schema::dropIfExists('add_flights');
    }
}
