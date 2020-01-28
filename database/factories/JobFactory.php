<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'client_id' => rand(1, 3),
        'job_title' => $faker->sentence(rand(5, 7)),
        'job_type' => $faker->word(rand(5, 7)),
        'job_description' => $faker->paragraphs(rand(5, 7), true),
        'slug' => $faker->unique()->slug,
        'salary' => $faker->numberBetween($min = 1000, $max = 9000),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
