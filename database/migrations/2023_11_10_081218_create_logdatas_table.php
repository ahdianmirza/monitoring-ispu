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
            // $table->id();
            $table->integer('idMonitoring', 30);
            $table->dateTime('waktu');
            $table->string('namadevice', 100);
            $table->string('co', 100)->default(0);
            $table->string('no2', 100)->default(0);
            $table->string('pm25', 100)->default(0);
            $table->primary('idMonitoring');
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
