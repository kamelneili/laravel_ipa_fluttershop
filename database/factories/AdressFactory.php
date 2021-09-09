<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adress;
use Faker\Generator as Faker;

$factory->define(Adress::class, function (Faker $faker) {
    return [
        'street_name'=>$faker->streetName,
        'state'=>$faker->state,
        'city'=>$faker->city,
        'country'=>$faker->country,
        'post_code'=>$faker->postcode,
        'street_number'=>$faker->numberBetween(1,500)
    ];
});
