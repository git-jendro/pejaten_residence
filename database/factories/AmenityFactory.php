<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Amenity;
use Faker\Generator as Faker;

$factory->define(Amenity::class, function (Faker $faker) {
    return [
        'nama' => $faker->word,
        'icon' => $faker->imageUrl($width = 640, $height = 480)
    ];
});
