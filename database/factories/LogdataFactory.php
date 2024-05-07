<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Logdata>
 */
class LogdataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'device' => fake()->randomElement(['Device A', 'Device B']),
            'co' => fake()->randomFloat(2, 10, 200),
            'no2' => fake()->randomFloat(2, 10, 300),
            'pm25' => fake()->randomFloat(2, 10, 400),
            'created_at' => fake()->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}