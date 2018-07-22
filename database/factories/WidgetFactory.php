<?php

use App\Widget;
use Faker\Generator as Faker;

$factory->define(Widget::class, function (Faker $faker) {
    return [
        'name' => $faker->word . ' Widget',
        'description' => $faker->paragraph(3),
        'price' => $faker->randomFloat(2, 20, 9999),
    ];
});
