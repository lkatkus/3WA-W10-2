<?php

use Faker\Generator as Faker;

$factory->define(App\Manufacturer::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'website' => $faker->url,
        'country' => $faker->country,
    ];
});
