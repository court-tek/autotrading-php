<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('vin_number');
            $table->string('model');
            $table->string('make');
            $table->string('fuel_type');
            $table->string('color');
            $table->string('body_type');
            $table->string('driveline');
            $table->string('mileage');
            $table->string('type');
            $table->string('transmission');
            $table->string('interior');
            $table->string('engine');
            $table->string('mpg');
            $table->string('wheel_type');
            $table->string('horsepower');
            $table->string('year');
            $table->string('options');
            $table->string('price');
            $table->string('city');
            $table->string('state');
            $table->longText('description')->nullable();
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
