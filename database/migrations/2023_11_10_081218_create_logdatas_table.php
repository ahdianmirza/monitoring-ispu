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
        Schema::create('logdatas', function (Blueprint $table) {
            $table->id();
            $table->string('device')->nullable();
            $table->string('co')->nullable();
            $table->string('no2')->nullable();
            $table->string('pm25')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logdatas');
    }
};