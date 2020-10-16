<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Atmosphere;

class AtmosphereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();

        $atmospheres = [
            ['id' => 1, 'star_id' => 1, 'planet_id' => 0, 'moon_id' => 0, 'argon' => 0, 'carbon_dioxide' => 0, 'helium' => 26, 'hydrogen' => 71, 'methane' => 0, 'nitrogen' => 0, 'other' => 3, 'oxygen' => 0, 'sodium' => 0, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 2, 'star_id' => 0, 'planet_id' => 1, 'moon_id' => 0, 'argon' => 0, 'carbon_dioxide' => 0, 'helium' => 6, 'hydrogen' => 22, 'methane' => 0, 'nitrogen' => 0, 'other' => 8, 'oxygen' => 0, 'sodium' => 22, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 3, 'star_id' => 0, 'planet_id' => 2, 'moon_id' => 0, 'argon' => 0, 'carbon_dioxide' => 96, 'helium' => 0, 'hydrogen' => 0, 'methane' => 0, 'nitrogen' => 4, 'other' => 0, 'oxygen' => 0, 'sodium' => 0, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 4, 'star_id' => 0, 'planet_id' => 3, 'moon_id' => 0, 'argon' => 1, 'carbon_dioxide' => 0, 'helium' => 0, 'hydrogen' => 0, 'methane' => 0, 'nitrogen' => 78, 'other' => 0, 'oxygen' => 21, 'sodium' => 0, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 5, 'star_id' => 0, 'planet_id' => 4, 'moon_id' => 0, 'argon' => 1.6, 'carbon_dioxide' => 95, 'helium' => 0, 'hydrogen' => 0, 'methane' => 0, 'nitrogen' => 2.7, 'other' => 0.7, 'oxygen' => 0, 'sodium' => 0, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 6, 'star_id' => 0, 'planet_id' => 5, 'moon_id' => 0, 'argon' => 0, 'carbon_dioxide' => 0, 'helium' => 10.2, 'hydrogen' => 89.8, 'methane' => 0, 'nitrogen' => 0, 'other' => 0, 'oxygen' => 0, 'sodium' => 0, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 7, 'star_id' => 0, 'planet_id' => 6, 'moon_id' => 0, 'argon' => 0, 'carbon_dioxide' => 0, 'helium' => 3.2, 'hydrogen' => 96.3, 'methane' => 0, 'nitrogen' => 0, 'other' => 0.5, 'oxygen' => 0, 'sodium' => 0, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 8, 'star_id' => 0, 'planet_id' => 7, 'moon_id' => 0, 'argon' => 0, 'carbon_dioxide' => 0, 'helium' => 15.2, 'hydrogen' => 82.5, 'methane' => 2.3, 'nitrogen' => 0, 'other' => 0, 'oxygen' => 0, 'sodium' => 0, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 9, 'star_id' => 0, 'planet_id' => 8, 'moon_id' => 0, 'argon' => 0, 'carbon_dioxide' => 0, 'helium' => 19, 'hydrogen' => 80, 'methane' => 1, 'nitrogen' => 0, 'other' => 0, 'oxygen' => 0, 'sodium' => 0, 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($atmospheres as $atmosphere) {
            Atmosphere::updateOrCreate(['id' => $atmosphere['id']], $atmosphere);
        }
    }
}
