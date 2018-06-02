<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->word.'Pvt. Ltd.',
        'user_id' => $faker->randomNumber,
        'email' => $faker->unique()->email,
        'contact' => $faker->phoneNumber,
    ];
});






    	// 'university_id'=>6 ,
    	// 'user_id' => $faker->randomNumber,
    	// 'college_code' => $faker->unique()->randomNumber,
    	// 'name' => $faker->name,
    	// 'contact'=>$faker->phoneNumber,
    	// 'email' => $faker->unique()->email,
    	// 'college_type' => 'technical',
