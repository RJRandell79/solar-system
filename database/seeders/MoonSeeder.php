<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Moon;

class MoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();

        $moons = [
            ['id' => 1, 'name' => 'Moon', 'planet_id' => 3, 'diameter' => 2158.8, 'distance' => 238856, 'orbit_length' => 27.32, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 2, 'name' => 'Phobos', 'planet_id' => 4, 'diameter' => 13.8, 'distance' => 3700, 'orbit_length' => 0.31, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 3, 'name' => 'Deimos', 'planet_id' => 4, 'diameter' => 7.8, 'distance' => 14580, 'orbit_length' => 1.26, 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($moons as $moon) {
            Moon::updateOrCreate(['id' => $moon['id']], $moon);
        }
    }
}
