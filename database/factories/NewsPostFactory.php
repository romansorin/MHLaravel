<?php

use Faker\Generator as Faker;

$factory->define(App\NewsPost::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'category' => $faker->word(),
        'content' => $faker->text(),
        'published_on' => $faker->date(),
        'owner_id' => $faker->randomDigitNotNull()
    ];
});
