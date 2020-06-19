<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(array ($faker->domainWord,$faker->domainWord,$faker->domainWord,$faker->domainWord,$faker->domainWord,$faker->domainWord,$faker->domainWord)),
        'price' => $faker->numberBetween(1001, 1299),
        'image' => $faker->imageUrl(),
        'brand' => $faker->domainWord,
        'description' => $faker->text(200)
    ];
});
