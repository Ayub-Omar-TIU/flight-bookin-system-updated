<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticktes', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('takeoffAirport');
            $table->string('to');
            $table->string('landingAirport');
            $table->double('price');
            $table->integer('stop');
            $table->boolean('status')->default(false);
            $table->dateTime('takeoffDate');
            $table->dateTime('landingDate');
            $table->string('class');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
