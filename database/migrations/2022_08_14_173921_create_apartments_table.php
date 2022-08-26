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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('desc');
            $table->integer('price');
            $table->string('location');
            $table->longText('takenDates')->nullable();
            $table->integer('beds');
            $table->integer('bedrooms');
            $table->boolean('wifi');
            $table->boolean('hairdryer');
            $table->boolean('heating');
            $table->boolean('ac');
            $table->boolean('hot_tub');
            $table->boolean('smoking');
            $table->boolean('smoke_detector');
            $table->boolean('balcony');
            $table->boolean('pets');
            $table->boolean('coffee_maker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
};
