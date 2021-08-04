<?php

namespace Database\Seeders;

use App\Models\Living;
use Illuminate\Database\Seeder;

class LivingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Living::create([
            'user_id' => 1,
            'light' => 'opened',
            'door' => 'closed',
            'temprature' => '34'
        ]);
    }
}
