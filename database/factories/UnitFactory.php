<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Unit;
use Faker\Generator as Faker;

$factory->define(Unit::class, function (Faker $faker) {
    return [
        'id_building' => $faker->randomDigit,
        'nama' => $faker->name,
        'deskripsi' => $faker->text,
        'harga_jual' => $faker->randomNumber(6),
        'harga_sewa' => $faker->randomNumber(5),
        'harga_cicil' => $faker->randomNumber(5),
        'diskon' => $faker->randomNumber(2),        
    ];
});