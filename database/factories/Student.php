<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Stduent::class, function (Faker $faker) {
    return [
        'enrollment_no' => $faker->randomNumber(4).$faker->word(2).$faker->randomNumber,
        'user_id'=>$faker->randomNumber,
        'email' => $faker->unique()->email,
        'contact' => $faker->phoneNumber,
        'eadhar'=>$faker->randomNumber(12)
    ];
});
