<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {

    $title = $faker->unique()->numberBetween(1, 10);

    return [
        'title' => 'title' . $title,
        'original_title' => 'original_title' . $title,
        'nationality' => $faker -> country,
        'date' => $faker -> date,
        'vote' => $faker -> randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10)
    ];
});
