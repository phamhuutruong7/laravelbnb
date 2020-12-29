<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'id' => \Illuminate\Support\Str::uuid(),
        'content' => $faker->sentences(5, true),
        'rating' => random_int(1, 5)
    ];
});
