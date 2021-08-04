<?php

namespace Database\Seeders;

use App\Models\Garden;
use Illuminate\Database\Seeder;

class GardenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Garden::create([
            'user_id' => 1,
            'light' => 'opened',
            'soil' => '25',
        ]);
    }
}
