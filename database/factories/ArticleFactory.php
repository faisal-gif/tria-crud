<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'author' => $faker->sentence(),
        'publication' => $faker->sentence(),
        'image' => $faker->image('public', 400, 300, null, false)
        //'year' => $faker->unique()->numberBetween(2000, 2020)'
    ];
});
