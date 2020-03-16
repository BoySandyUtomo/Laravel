<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destination;
use Faker\Generator as Faker;

$factory->define(Destination::class, function (Faker $faker) {
    $faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'name' => $faker->company,
        'category' => $faker->numberBetween($min=1, $max=10),
        'location' => $faker->address,
        'description' => $faker->text,
        'image' => $faker->picsum('public/image', 400, 400, false)
    
    ];
});
