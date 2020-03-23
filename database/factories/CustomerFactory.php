<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
	$name=$faker->name;
    return [
       'name' => $name,
       
    ];
});
