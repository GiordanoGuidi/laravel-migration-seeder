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
            'departure_time' => fake()->dateTimeThisMonth('+12 days'),
            'arrival_time' => fake()->dateTimeThisMonth('+12 days'),
            'train_code' => fake()->randomNumber(9, true),
            'number_carriages' => fake()->randomDigitNotNull(),
            'in_time' => rand(0, 1),
            'deleted' => rand(0, 1),
        ];
    }
}
