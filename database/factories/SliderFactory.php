<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slider;
use Faker\Generator as Faker;

$factory->define(Slider::class, function (Faker $faker) {
    return [
        'Pc'		=>Str::random(10),
        'Mobile'	=>Str::random(10),
        'Url'		=>Str::random(10),
        'Order'		=>rand(0,10),
        'On_Off'	=>rand(0,1),
    ];
});
