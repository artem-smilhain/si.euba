<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate')->unique();
            $table->string('model');
            $table->integer('capacity');
            $table->string('fuel_type');
            $table->string('transmission_type');
            $table->year('year');
            $table->integer('mileage');
            $table->decimal('rental_price', 10, 2);
            $table->string('status');
            $table->string('photo_path')->nullable(); // Поле для фото
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
