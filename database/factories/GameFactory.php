<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'title' => $faker->word(2),
        'image' => 'https://placehold.jp/150x150.png',
        'price' => $faker->randomFloat(79.99, 59.99, 24.99, 99.99),
        'description' => $faker->sentence(8),
    ];
});
