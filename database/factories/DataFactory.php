<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Sensor;
use DateTime;

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
            //'data' => $this->faker->randomFloat(2,0,20),
            'data' => $this->faker->numberBetween(1,20),
            'dataType' => 'kWh',
            'sensorID' => Sensor::inRandomOrder()->first()->id,
            'date' => date('Y-m-d'),
        ];
    }
}
