<?php

use Faker\Generator as Faker;
Use App\Models\Product;
Use App\Models\Category;


$factory->define(Product::class, function (Faker $faker) {
    return [
    	'category_id'=>Category::all()->random()->id,
       'title'=>$faker->text(100),
       'description'=>$faker->realText(),
       'price'=>random_int(100, 1000),

    ];
});
