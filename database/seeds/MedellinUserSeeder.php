<?php

use App\Bogota\BogotaUser;
use Illuminate\Database\Seeder;

class MedellinUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Medellin\MedellinUser::class, 50)->create();
    }
}
