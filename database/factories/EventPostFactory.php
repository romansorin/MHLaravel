<?php

use Faker\Generator as Faker;

$factory->define(App\EventPost::class, function (Faker $faker) {
    return [
        'title'       => $faker->sentence(),
        'description' => $faker->sentence(),
        'event_date'  => $faker->dateTimeInInterval($startDate = 'now', $endDate = '+ 30 days'),
        'image'       => $faker->imageURL(),
        'owner_id'    => $faker->randomDigitNotNull(),
    ];
});
