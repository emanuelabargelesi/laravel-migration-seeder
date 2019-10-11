<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Place;

$factory->define(Place::class, function (Faker $faker) {
    return [
        'name' => $faker -> city(),
        'address' => $faker -> address(),
        'city' => $faker -> state(),
        'nation' => $faker -> country(),
    ];
});
