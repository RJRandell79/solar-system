<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Environment;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();

        $features = [
            ['id' => 1, 'planet_id' => 5, 'moon_id' => null, 'overview' => "Jupiter's environment is probably not conclusive to life as we know it. The temperatures, pressures and materials that characterize this planet are most likely too extreme and volatile for organisms to adapt to.", 'more_details' => "While planet Jupiter is an unlikely place for living things to take hold, the same is not true of some of it's many moons. Europa is one of the likeliest places to find life elsewhere in our solar system. There is evidence of a vast ocean just beneath it's icy crust where life could possibly be supported. The temperature in the clouds of Jupiter us about minus 145 degrees Celsius (minus 236 degrees Fahrenheit). The core temperature may be about 24,000 degrees Celsius (43,000 degrees Fahrenheit. That's hotter than the surface of the Sun.", 'atmosphere_description' => "Jupiter's atmosphere is made up mostly of hydrogen (H2) and Helium (Ha).", 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($features as $feature) {
            Environment::updateOrCreate(['id' => $feature['id']], $feature);
        }
    }
}
