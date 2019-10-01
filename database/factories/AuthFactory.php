<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->email,
        'password'=>md5('123456'),
        'role'=>$faker->randomElement($array=array('admin','teacher','student')),
        'birth_date'=>$faker->date($format='Y-m-d',$max='1999-12-12')
    ];
});
