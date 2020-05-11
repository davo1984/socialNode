<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id'  => $faker->unique()->numberBetween($min = 1, $max = 3),
        'user_id'  => $faker->unique()->numberBetween($min = 1, $max = 3),
        'edited_timestamp' => now(),
        'body' => $faker->paragraph
    ];
});
