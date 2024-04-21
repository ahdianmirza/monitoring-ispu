<?php

namespace Database\Seeders;

use App\Models\Logdata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogdatasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Logdata::factory()->count(100)->create();
    }
}