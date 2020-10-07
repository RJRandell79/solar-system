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
            ['id' => 1, 'name' => 'Mercury', 'star_id' => 1, 'diameter' => 3031.9, 'distance' => 39.2, 'orbit_length' => 88, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 2, 'name' => 'Venus', 'star_id' => 1, 'diameter' => 7520.8, 'distance' => 67, 'orbit_length' => 225, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 3, 'name' => 'Earth', 'star_id' => 1, 'diameter' => 7915.5, 'distance' => 92.89, 'orbit_length' => 365.25, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 4, 'name' => 'Mars', 'star_id' => 1, 'diameter' => 4212.3, 'distance' => 131.89, 'orbit_length' => 687, 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($planets as $planet) {
            Planet::updateOrCreate(['id' => $planet['id']], $planet);
        }
    }
}
