<?php

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'body' => $faker->text(),
        'user_id' => $faker->numberBetween(1,25),
        // 'created_at' => carbon::now(),
        // 'updated_at' => carbon::now()
    ];
});
