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
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->decimal('cancellation_fee_72_to_24', 10, 2);
            $table->decimal('cancellation_fee_less_than_24', 10, 2);
            $table->foreignId('reservation_id')->constrained('reservations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rules');
    }
};
