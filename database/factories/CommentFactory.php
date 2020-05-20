<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

// 'post_id' => $faker->unique()->numberBetween($min = 1, $max = 17),
// 'user_id' => $faker->unique()->numberBetween($min = 1, $max = 2),

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => $faker->randomDigitNot( 0 ),
        'user_id' => $faker->randomDigitNot( 0 ),
        // 'edited_timestamp' => now(),
        'body' => $faker->paragraph
    ];
});