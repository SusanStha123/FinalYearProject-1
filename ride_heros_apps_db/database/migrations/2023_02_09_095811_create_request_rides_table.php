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
        Schema::create('request_rides', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle-type')->comment('0 = Car, 1 = Bike, 2 = Tuktuk');
            $table->integer("fares");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_rides');
    }
};
