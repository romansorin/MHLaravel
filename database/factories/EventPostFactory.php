<?php

use Faker\Generator as Faker;

$factory->define(App\EventPost::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->sentence(),
        'event_date' => $faker->date(),
        'image' => $faker->imageURL(),
        'owner_id' => $faker->randomDigitNotNull()
    ];
});
