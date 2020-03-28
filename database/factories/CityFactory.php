<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DataCenter\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {

    $city = $faker->unique()->randomElement(City::CITIES);

    return [
        'city' => $city['city'],
        'data_base_name' => $city['data_base_name']
    ];
});
