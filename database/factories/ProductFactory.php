<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->title(),
        'description'=>$faker->paragraph(5),
        'unit'=>$faker->randomElement(['kg','qty','m']),
        'price'=>$faker->randomFloat(),
        'total'=>$faker->numberBetween(1,500),
    ];
});
