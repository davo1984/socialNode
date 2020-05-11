<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hashtag;
use Faker\Generator as Faker;

$factory->define(Hashtag::class, function (Faker $faker) {
    return [
        'post_id'  => $faker->unique()->numberBetween($min = 1, $max = 5),
        'edited_timestamp' => now(),
        'body' => $faker->word
    ];
});
