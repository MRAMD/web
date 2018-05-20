<?php

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'body' => $faker->text(),
        'user_id' => function () { return factory(App\User::class)->create()->id;},
        // 'created_at' => carbon::now(),
        // 'updated_at' => carbon::now()
    ];
});
