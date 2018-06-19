<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        	'name' => $faker->name,
            'fname' => $faker->name,
            'fees' => $faker->numberBetween($min = 300, $max = 800),
            'phone' => $faker->phoneNumber,
            'locker' => $faker->numberBetween($min = 10, $max = 800),
            'category' => 'fitness',
            'date' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'gender' => 'male',
    ];
});
