<?php

namespace Database\Seeders;

use App\Models\Entrance;
use Illuminate\Database\Seeder;

class EntranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entrance::create([
            'user_id' => 1,
            'light' => 'closed',
        ]);
    }
}
