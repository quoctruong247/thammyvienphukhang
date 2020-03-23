<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	$name=$faker->name;
    return [
       'name' => $name,
       'slug' => Str::slug($name,'-'),
       'on_off' => rand(0,1),
    ];
});
