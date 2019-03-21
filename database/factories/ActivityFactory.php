<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->text(400),
        'image' => $faker->imageURL(),
        'owner_id' => $faker->randomDigitNotNull()
    ];
});
