<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
       
        'body' => $faker->text(),
        
        'user_id' => function () { return factory(App\User::class)->create()->id;},
        'article_id' => function () { return factory(App\Article::class)->create()->id;},
        'replay' => $faker->text(),
        // 'created_at' => carbon::now(),
        // 'updated_at' => carbon::now(),
        
    ];
});
