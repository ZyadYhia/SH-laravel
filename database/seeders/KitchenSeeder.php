<?php

namespace Database\Seeders;

use App\Models\Kitchen;
use Illuminate\Database\Seeder;

class KitchenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kitchen::create([
            'user_id' => 1,
            'light' => 'opened',
            'window' => 'closed',
            'gas' => 'leak'
        ]);
    }
}
