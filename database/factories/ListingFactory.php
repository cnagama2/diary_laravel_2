<?php

use Faker\Generator as Faker;

$factory->define(App\Listing::class, function (Faker $faker) {
    return [
    'title' => $faker->realText($maxNbChars = 100, $indexSize = 1),
    'user_id' => '1',
    'due_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
  ];
    
});
