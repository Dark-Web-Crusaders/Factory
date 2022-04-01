<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Activity::factory(10)->create();
        \App\Models\Machine::factory(10)->create();
        \App\Models\Plant::factory(10)->create();
        \App\Models\Sensor::factory(10)->create();
        \App\Models\Data::factory(10)->create();
    }
}
