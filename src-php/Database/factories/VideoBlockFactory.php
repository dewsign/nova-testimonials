<?php

use Faker\Generator as Faker;
use Dewsign\NovaReviews\Video;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'platform' => 'default',
        'link' => 'https://www.youtube.com/watch?v=vRZbGorgHB4',
    ];
});