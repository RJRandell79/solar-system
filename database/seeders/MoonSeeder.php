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
            ['id' => 3, 'name' => 'Deimos', 'planet_id' => 4, 'diameter' => 7.8, 'distance' => 14580, 'orbit_length' => 1.26, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 4, 'name' => 'Metis', 'planet_id' => 5, 'diameter' => 43, 'distance' => 79500, 'orbit_length' => 0.29, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 5, 'name' => 'Adrastea', 'planet_id' => 5, 'diameter' => 7.8, 'distance' => 80000, 'orbit_length' => 0.30, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 6, 'name' => 'Amalthea', 'planet_id' => 5, 'diameter' => 167, 'distance' => 112700, 'orbit_length' => 0.50, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 7, 'name' => 'Thebe', 'planet_id' => 5, 'diameter' => 98.6, 'distance' => 138000, 'orbit_length' => 0.67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 8, 'name' => 'Io', 'planet_id' => 5, 'diameter' => 3643.2, 'distance' => 220000, 'orbit_length' => 1.769, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 9, 'name' => 'Europa', 'planet_id' => 5, 'diameter' => 3121.6, 'distance' => 420000, 'orbit_length' => 3.55, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 10, 'name' => 'Ganymede', 'planet_id' => 5, 'diameter' => 5262.4, 'distance' => 664000, 'orbit_length' => 7.15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 11, 'name' => 'Callisto', 'planet_id' => 5, 'diameter' => 4820.6, 'distance' => 1170000, 'orbit_length' => 16.69, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 12, 'name' => 'Themisto', 'planet_id' => 5, 'diameter' => 9, 'distance' => 0, 'orbit_length' => 129.95, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 13, 'name' => 'Leda', 'planet_id' => 5, 'diameter' => 21.5, 'distance' => 6900000, 'orbit_length' => 241.33, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 14, 'name' => 'Himalia', 'planet_id' => 5, 'diameter' => 139.6, 'distance' => 7000000, 'orbit_length' => 248.47, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 15, 'name' => 'Ersa', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => 250.4, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 16, 'name' => 'Pandia', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => 251.77, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 17, 'name' => 'Elara', 'planet_id' => 5, 'diameter' => 79.9, 'distance' => 7250000, 'orbit_length' => 258.48, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 18, 'name' => 'Lysithea', 'planet_id' => 5, 'diameter' => 42.2, 'distance' => 7200000, 'orbit_length' => 258.58, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 19, 'name' => 'Dia', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => 276, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 20, 'name' => 'Carpo', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => 440.91, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 21, 'name' => 'Valetudo', 'planet_id' => 5, 'diameter' => 1, 'distance' => 0, 'orbit_length' => 532.01, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 22, 'name' => 'Euporie', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -542.65, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 23, 'name' => 'Harpalyke', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -596.56, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 24, 'name' => 'Hermippe', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -602.48, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 25, 'name' => 'Euanthe', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => -602.81, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 26, 'name' => 'Thyone', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => -603.58, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 27, 'name' => 'Mneme', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -605.76, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 28, 'name' => 'Iocaste', 'planet_id' => 5, 'diameter' => 5, 'distance' => 0, 'orbit_length' => -605.96, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 29, 'name' => 'Praxidike', 'planet_id' => 5, 'diameter' => 7, 'distance' => 0, 'orbit_length' => -609.25, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 30, 'name' => 'Ananke', 'planet_id' => 5, 'diameter' => 29.1, 'distance' => 13100000, 'orbit_length' => -610.22, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 31, 'name' => 'Thelxinoe', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -621.9, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 32, 'name' => 'Orthosie', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -625.07, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 33, 'name' => 'Helike', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -626.33, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 34, 'name' => 'Eupheme', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -628.06, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 35, 'name' => 'Kale', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -685.07, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 36, 'name' => 'Chaldene', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -691.25, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 37, 'name' => 'Taygete', 'planet_id' => 5, 'diameter' => 5, 'distance' => 0, 'orbit_length' => -691.62, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 38, 'name' => 'Herse', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -692.16, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 39, 'name' => 'Kallichore', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -695.01, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 40, 'name' => 'Kalyke', 'planet_id' => 5, 'diameter' => 6.9, 'distance' => 0, 'orbit_length' => -697.41, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 41, 'name' => 'Paslthee', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -699.28, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 42, 'name' => 'Philophrosyne', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -701.42, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 43, 'name' => 'Cyllene', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -703.93, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 44, 'name' => 'Autonoe', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -711.10, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 45, 'name' => 'Megaclite', 'planet_id' => 5, 'diameter' => 5, 'distance' => 0, 'orbit_length' => -717.14, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 46, 'name' => 'Eurydome', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => -719.53, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 47, 'name' => 'Pasiphae', 'planet_id' => 5, 'diameter' => 57.8, 'distance' => 14600000, 'orbit_length' => -722.34, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 48, 'name' => 'Callirrhoe', 'planet_id' => 5, 'diameter' => 9.6, 'distance' => 0, 'orbit_length' => -722.53, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 49, 'name' => 'Isonoe', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -727.65, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 50, 'name' => 'Aitne', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => -727.95, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 51, 'name' => 'Hegemone', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => -733.24, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 52, 'name' => 'Sponde', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -734.89, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 53, 'name' => 'Eukelade', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -735.03, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 54, 'name' => 'Erinome', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => -739.53, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 55, 'name' => 'Arche', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => -743.00, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 56, 'name' => 'Eirene', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -743.88, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 57, 'name' => 'Carme', 'planet_id' => 5, 'diameter' => 46.7, 'distance' => 13800000, 'orbit_length' => -756.09, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 58, 'name' => 'Aoede', 'planet_id' => 5, 'diameter' => 4, 'distance' => 0, 'orbit_length' => -760.14, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 59, 'name' => 'Kore', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -776.02, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 60, 'name' => 'Sinope', 'planet_id' => 5, 'diameter' => 35, 'distance' => 14700000, 'orbit_length' => -777.29, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 61, 'name' => 'S/1999 J 1', 'planet_id' => 5, 'diameter' => 5, 'distance' => 15000000, 'orbit_length' => -774, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 62, 'name' => 'S/2003 J 12', 'planet_id' => 5, 'diameter' => 1, 'distance' => 0, 'orbit_length' => -482.69, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 63, 'name' => 'S/2003 J 18', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -587.38, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 64, 'name' => 'S/2017 J 7', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -602.77, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 65, 'name' => 'S/2016 J 1', 'planet_id' => 5, 'diameter' => 1, 'distance' => 0, 'orbit_length' => -603.81, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 66, 'name' => 'S/2003 J 16', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -607.11, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 67, 'name' => 'S/2010 J 2', 'planet_id' => 5, 'diameter' => 1, 'distance' => 0, 'orbit_length' => -630.39, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 68, 'name' => 'S/2017 J 9', 'planet_id' => 5, 'diameter' => 3, 'distance' => 0, 'orbit_length' => -640.9, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 69, 'name' => 'S/2017 J 6', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -684.66, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 70, 'name' => 'S/2011 J 1', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -684.98, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 71, 'name' => 'S/2003 J 19', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -698.56, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 72, 'name' => 'S/2003 J 10', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -700.13, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 73, 'name' => 'S/2003 J 23', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -700.54, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 74, 'name' => 'S/2010 J 1', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -707.61, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 75, 'name' => 'S/2017 J 5', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -720.49, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 76, 'name' => 'S/2017 J 8', 'planet_id' => 5, 'diameter' => 1, 'distance' => 0, 'orbit_length' => -720.73, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 77, 'name' => 'S/2011 J 2', 'planet_id' => 5, 'diameter' => 1, 'distance' => 0, 'orbit_length' => -722.55, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 78, 'name' => 'S/2017 J 2', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -723.83, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 79, 'name' => 'S/2003 J 4', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -739.29, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 80, 'name' => 'S/2003 J 9', 'planet_id' => 5, 'diameter' => 1, 'distance' => 0, 'orbit_length' => -752.84, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 81, 'name' => 'S/2017 J 1', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -780.63, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 76, 'name' => 'S/2003 J 2', 'planet_id' => 5, 'diameter' => 2, 'distance' => 0, 'orbit_length' => -1077.02, 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($moons as $moon) {
            Moon::updateOrCreate(['id' => $moon['id']], $moon);
        }
    }
}
