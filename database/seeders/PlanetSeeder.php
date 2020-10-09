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
            ['id' => 1, 'name' => 'Mercury', 'star_id' => 1, 'diameter' => 3031.9, 'distance' => 39.2, 'orbit_length' => 88, 'day_length' => 1407, 'planet_type' => 'Rocky', 'description' => 'Mercury is the smallest and innermost planet in the Solar System. Its orbit around the Sun takes 87.97 days, the shortest of all the planets in the Solar System.', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 2, 'name' => 'Venus', 'star_id' => 1, 'diameter' => 7520.8, 'distance' => 67, 'orbit_length' => 225, 'day_length' => 2802, 'planet_type' => 'Rocky', 'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty. As the second-brightest natural object in the night sky after the Moon.', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 3, 'name' => 'Earth', 'star_id' => 1, 'diameter' => 7915.5, 'distance' => 92.89, 'orbit_length' => 365.25, 'day_length' => 24, 'planet_type' => 'Rocky', 'description' => 'Earth is the third planet from the Sun and the only astronomical object known to harbor life. According to radiometric dating estimation and other evidence, Earth formed over 4.5 billion years ago.', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 4, 'name' => 'Mars', 'star_id' => 1, 'diameter' => 4212.3, 'distance' => 131.89, 'orbit_length' => 687, 'day_length' => 24.57, 'planet_type' => 'Rocky', 'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury. In English, Mars carries the name of the Roman god of war and is often referred to as the Red Planet.', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 5, 'name' => 'Jupiter', 'star_id' => 1, 'diameter' => 86881, 'distance' => 476.73, 'orbit_length' => 4380, 'day_length' => 10, 'planet_type' => 'Gas Gaint', 'description' => 'Jupiter is the fifth planet from the Sun and the largest in the Solar System. It is a gas giant with a mass one-thousandth that of the Sun, but two-and-a-half times that of all the other planets in the Solar System combined.', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 6, 'name' => 'Saturn', 'star_id' => 1, 'diameter' => 72367, 'distance' => 746, 'orbit_length' => 10585, 'day_length' => 10.7, 'planet_type' => 'Gas Gaint', 'description' => 'Saturn is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter. It is a gas giant with an average radius of about nine times that of Earth.', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 7, 'name' => 'Uranus', 'star_id' => 1, 'diameter' => 31518, 'distance' => 1784, 'orbit_length' => 30660, 'day_length' => 17.24, 'planet_type' => 'Ice Gaint', 'description' => 'Uranus is the seventh planet from the Sun. Its name is a reference to the Greek god of the sky, Uranus, who, according to Greek mythology, was the grandfather of Zeus (Jupiter) and father of Cronus (Saturn).', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 8, 'name' => 'Neptune', 'star_id' => 1, 'diameter' => 30599, 'distance' => 2794.4, 'orbit_length' => 60225, 'day_length' => 16, 'planet_type' => 'Ice Gaint', 'description' => 'Neptune is the eighth and farthest-known Solar planet from the Sun. In the Solar System, it is the fourth-largest planet by diameter, the third-most-massive planet, and the densest giant planet.', 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($planets as $planet) {
            Planet::updateOrCreate(['id' => $planet['id']], $planet);
        }
    }
}
