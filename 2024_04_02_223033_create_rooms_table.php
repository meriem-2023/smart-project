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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('machine_id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->foreign('machine_id')->references('id')->on('machine');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
