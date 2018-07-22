<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $users = App\User::all();

    return [
        'name' => $faker->sentence(4),
        'user_id' => $users->random()->id,
    ];
});
