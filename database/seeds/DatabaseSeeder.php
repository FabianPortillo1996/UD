<?php

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
        $this->call(BogotaUserSeeder::class);
        $this->call(MedellinUserSeeder::class);
        $this->call(CitySeeder::class);
    }
}
