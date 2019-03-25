<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        'name'     => $faker->unique()->word(),
        'advisor'  => $faker->name(),
        'updated'  => $faker->boolean(),
        'content'  => $faker->text(400),
        'image'    => $faker->imageURL(),
        'owner_id' => $faker->randomDigitNotNull(),
    ];
});
