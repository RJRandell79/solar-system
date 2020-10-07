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
            ['id' => 4, 'name' => 'Mars', 'star_id' => 1, 'diameter' => 4212.3, 'distance' => 131.89, 'orbit_length' => 687, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 5, 'name' => 'Jupiter', 'star_id' => 1, 'diameter' => 86881, 'distance' => 476.73, 'orbit_length' => 4380, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 6, 'name' => 'Saturn', 'star_id' => 1, 'diameter' => 72367, 'distance' => 746, 'orbit_length' => 10585, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 7, 'name' => 'Uranus', 'star_id' => 1, 'diameter' => 31518, 'distance' => 1784, 'orbit_length' => 30660, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 8, 'name' => 'Neptune', 'star_id' => 1, 'diameter' => 30599, 'distance' => 2794.4, 'orbit_length' => 60225, 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($planets as $planet) {
            Planet::updateOrCreate(['id' => $planet['id']], $planet);
        }
    }
}
