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
        Schema::create('led', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('room_id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->integer('pin')->unique();
            $table->string('color');
            $table->string('brigthnes');
            $table->string('status');
            $table->foreign('room_id')->references('id')->on('room');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leds');
    }
};
