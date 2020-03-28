<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medellin\MedellinUser;
use Faker\Generator as Faker;

$factory->define(MedellinUser::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'name' => $faker->name,
        'phone' => $faker->randomNumber(7),
        'identification' => $faker->creditCardNumber
    ];
});
