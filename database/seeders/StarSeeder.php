<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Star;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();

        $stars = [
            ['id' => 1, 'name' => 'Sol', 'class' => 'G2V', 'diameter' => 864000, 'created_at' => $time, 'updated_at' => $time]
        ];

        foreach ($stars as $star) {
            Star::updateOrCreate(['id' => $star['id']], $star);
        }
    }
}
