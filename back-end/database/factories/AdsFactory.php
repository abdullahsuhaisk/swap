<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\Ads::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        },
        'title' => $faker->name,
        'desc' => $faker->paragraph,
        'condition' => $faker->numberBetween(0,5),
        'view' => $faker->randomDigit,
        'state_id' => function() {
            return \App\Model\State::all()->random(); },
        'city_id'=> $faker->numberBetween(1,3),
        'category_id' => function() {
            return \App\Model\Category::all()->random();
        }
    ];
});
