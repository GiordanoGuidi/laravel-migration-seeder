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
            'agency' => '',
            'departure_station' => '',
            'arrival_station' => '',
            'departure_time' => '',
            'arrival time' => '',
            'train code' => '',
            'number_carriages' => '',
            'in_time' => '',
            'deleted' => '',


        ];
    }
}
