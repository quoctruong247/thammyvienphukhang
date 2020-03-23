<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
	$name=$faker->name;
    return [
        'title'			=>$name,
        'description'	=>$faker->paragraph,
        'price'		    =>rand(1,100),
    ];
});
