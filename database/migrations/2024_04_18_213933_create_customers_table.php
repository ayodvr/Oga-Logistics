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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->string('trip_distance');
            $table->string('trip_time');
            $table->string('trip_cost');
            $table->integer('user_id');
            $table->string('hashed');
            $table->string('tracking');
            $table->string('order_id');
            $table->integer('driver_id')->nullable();
            $table->string('assigned')->nullable();
            $table->integer('accepted')->nullable();
            $table->integer('picked_up')->nullable();
            $table->integer('delivered')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
