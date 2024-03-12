<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agency' => fake()->word(),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->dayOfMonth(),
            'arrival time' => fake()->dayOfMonth(),
            'train code' => fake()->randomNumber(10, true),
            'number_carriages' => fake()->randomDigitNotNull(),
            'in_time' => rand(0, 1),
            'deleted' => rand(0, 1),
        ];
    }
}
