<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(\App\Party::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'location' => $faker->name,
        'solo' => $faker->boolean,
        'reputation' => $faker->randomNumber(),
        'price_modifier' => $faker->randomNumber(),
        'donate_gold' => $faker->randomNumber(),
        'prosperity_city_level' => $faker->randomNumber(),
        'prosperity_checkmarks' => $faker->randomNumber(),
        'notes' => $faker->text(),
        'campaign_id' => $faker->randomNumber(),
        'users_id' => $faker->randomNumber()
        ];
});

$factory->define(\App\World::class, function (Faker $faker) {
    $userId = $faker->randomNumber();
    return [
        'name' => $faker->name,
        'user_id' => $userId,
        'parties' => factory(\App\Party::class)->make(['users_id'=>$userId])
        ];
});

