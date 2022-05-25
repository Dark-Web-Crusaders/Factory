<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PlantFactory extends Factory
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
            'location' => $this->faker->country(),
        ];
    }
}
