<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Building;
use Faker\Generator as Faker;

$factory->define(Building::class, function (Faker $faker) {
    return [
        'id_project' => '5',
        'nama'       => $faker->name,
        'lantai'     => $faker->randomDigit,
        'luas'       => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'deskripsi'  => $faker->text
    ];
});
