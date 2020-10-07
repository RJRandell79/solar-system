<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Planet;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();

        $planets = [
            ['id' => 1, 'name' => 'Mercury', 'star_id' => 1, 'diameter' => 4665, 'distance' => 5677, 'orbit_length' => 88, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 2, 'name' => 'Venus', 'star_id' => 1, 'diameter' => 5673, 'distance' => 9636, 'orbit_length' => 136, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 3, 'name' => 'Earth', 'star_id' => 1, 'diameter' => 5783, 'distance' => 13946, 'orbit_length' => 365.24, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 4, 'name' => 'Mars', 'star_id' => 1, 'diameter' => 4845, 'distance' => 19465, 'orbit_length' => 625, 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($planets as $planet) {
            Planet::updateOrCreate(['id' => $planet['id']], $planet);
        }
    }
}
