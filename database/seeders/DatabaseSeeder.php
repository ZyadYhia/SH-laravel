<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EntranceSeeder::class,
            GarageSeeder::class,
            GardenSeeder::class,
            KitchenSeeder::class,
            LivingSeeder::class,
            RoomSeeder::class,
        ]);
    }
}
