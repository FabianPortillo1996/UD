<?php

use App\Bogota\BogotaUser;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\DataCenter\City::class, 2)->create();
    }
}
