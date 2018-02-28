<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->firstNameMale,
        'description' => $faker->words(20, true),
        'price' => $faker->numberBetween(10,1000),
        'quantity' => $faker->numberBetween(0,150),
    ];
});
