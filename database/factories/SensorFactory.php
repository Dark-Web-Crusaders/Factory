<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Plant;
use App\Models\Machine;

class SensorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'plantID' => Plant::inRandomOrder()->first()->id,
            'machineID' => Machine::inRandomOrder()->first()->id
        ];
    }
}