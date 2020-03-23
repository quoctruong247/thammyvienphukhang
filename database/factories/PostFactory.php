<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	$name=$faker->name;
    return [
        'Title'			=>$name,
        'Slug'			=>Str::Slug($name,'-'),
        'Keyword'		=>$faker->title,
        'Description'	=>$faker->paragraph,
        'Content'		=>$faker->paragraph,
        'Image'			=>Str::random(10),
        'PostSale'      =>rand(0,1),
        'On_Off'		=>rand(0,1),
        'RelatedPost'	=>rand(1,50),
        'categories_id'	=>rand(1,4),
        'users_id'		=>rand(1,6),
        'NewPost'       =>rand(0,1),
        'UpdateTimes'   =>rand(1,50),
        'View'			=>rand(0,100),

    ];
});
