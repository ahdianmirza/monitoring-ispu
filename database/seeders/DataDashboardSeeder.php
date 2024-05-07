<?php

namespace Database\Seeders;

use App\Models\DataDashboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataDashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataDashboard::factory()->count(1)->create();
    }
}