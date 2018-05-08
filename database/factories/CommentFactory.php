<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
       
        'body' => $faker->text(),
        'user_id' => $faker->numberBetween(1,50),
        'article_id' => $faker->numberBetween(1,20),
        'replay' => $faker->text(),
        // 'created_at' => carbon::now(),
        // 'updated_at' => carbon::now(),
        
    ];
});
