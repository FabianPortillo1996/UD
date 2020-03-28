<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bogota\BogotaUser;
use Faker\Generator as Faker;

$factory->define(BogotaUser::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'name' => $faker->name,
        'phone' => $faker->randomNumber(7),
        'identification' => $faker->creditCardNumber
    ];
});
