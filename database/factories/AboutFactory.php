<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\about;

$factory->define(about::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence(),
        'isi' => $faker->sentence()
    ];
});
