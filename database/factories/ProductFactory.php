<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    $categories=App\Categories::pluck('id')->toArray();
    return [
        'title'=>Str::random(10),
        'price'=>$faker->numberBetween($min=500,$max=1000),
        'category_id'=>$faker->randomElement($categories)
    ];
});
