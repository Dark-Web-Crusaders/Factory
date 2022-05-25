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
        \App\Models\Activity::factory(500)->create();
        \App\Models\Machine::factory(500)->create();
        \App\Models\Plant::factory(25)->create();
        \App\Models\Sensor::factory(2000)->create();
        \App\Models\Data::factory(5000)->create();
    }
}
