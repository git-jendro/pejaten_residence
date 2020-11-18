<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Facility;
use Faker\Generator as Faker;

$factory->define(Facility::class, function (Faker $faker) {
    return [
        'nama' => $faker->word,
        'icon' => $faker->imageUrl($width = 640, $height = 480)
    ];
});
