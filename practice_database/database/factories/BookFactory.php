<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'book_name'=> $faker->realText($maxNbChars = 20,$indexSize = 1),
        'author'=> $faker->name,
        'price'=> $faker->numberBetween($min = 600,$max = 4000),
        'stocks'=> $faker->numberBetween($min = 1,$max = 100),
        'release_dt'=> $faker->dateTime($max = 'now',$timezone = date_default_timezone_get()),
    ];
});
