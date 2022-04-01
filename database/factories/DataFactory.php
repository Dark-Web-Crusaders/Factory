<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Sensor;

class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data' => $this->faker->randomNumber(7, True),
            'dataType' => Str::random(8),
            'sensorID' => Sensor::inRandomOrder()->first()->id
        ];
    }
}
