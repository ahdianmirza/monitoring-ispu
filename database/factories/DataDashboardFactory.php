<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataDashboard>
 */
class DataDashboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'co' => fake()->randomFloat(2, 10, 200),
            'no2' => fake()->randomFloat(2, 10, 300),
            'pm25' => fake()->randomFloat(2, 10, 400),
            'ispu_co' => fake()->numberBetween(1, 500),
            'ispu_no2' => fake()->numberBetween(1, 500),
            'ispu_pm25' => fake()->numberBetween(1, 500),
        ];
    }
}