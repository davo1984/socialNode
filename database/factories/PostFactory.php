<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

// 'user_id' => $faker->unique()->numberBetween($min = 3, $max = 6),

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNot( 0 ),
        'body' => $faker->paragraph,
        'title' => $faker->sentence
    ];
});