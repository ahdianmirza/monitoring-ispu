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
        Schema::create('data_dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('co')->nullable();
            $table->string('no2')->nullable();
            $table->string('pm25')->nullable();
            $table->string('ispu_co')->nullable();
            $table->string('ispu_no2')->nullable();
            $table->string('ispu_pm25')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_dashboards');
    }
};