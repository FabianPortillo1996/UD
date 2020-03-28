<?php

use Illuminate\Database\Seeder;

class BogotaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bogota\BogotaUser::class, 50)->create();
    }
}
