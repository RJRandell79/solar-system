<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Features;

class FeaturesSeeder extends Seeder
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
            ['id' => 1, 'title' => 'Giant Red Spot', 'type' => 'Atmospheric', 'overview' => "The Great Red Spot is a persistent high-pressure region in the atmosphere of Jupiter, producing an anticyclonic storm, the largest in the Solar System, 22 degrees south of Jupiter's equator. Observations from 1665 to 1713 are believed to be of the same storm; if this is correct, it has existed for at least 360 years. It was next observed in September 1831, with 60 recorded observations between then and 1878 when continuous observations began.", 'bullet1' => "The Great Red Spot varies greatly in hue, from almost brick-red to pale salmon or even white", 'bullet2' => "Jupiter's Great Red Spot rotates counterclockwise, with a period of about six Earth days or fourteen Jovian days", 'bullet3' => "Jupiter's Great Red Spot is 1.3 times the diameter of Earth.", 'bullet1_icon' => 'fas fa-palette', 'bullet2_icon' => 'fas fa-undo', 'bullet3_icon' => 'fas fa-ruler-combined', 'image_url' => 'jupiter-red-spot.png', 'featureable_type' => 'App\Models\Planet', 'featureable_id' => 5, 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($features as $feature) {
            Features::updateOrCreate(['id' => $feature['id']], $feature);
        }
    }
}
