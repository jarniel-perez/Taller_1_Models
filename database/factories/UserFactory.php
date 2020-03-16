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
        'apellido' => $faker->lastName,
        'telefono' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'email' => $faker->unique()->safeEmail,
        'rol_id' => App\Rol::inRandomOrder()->value('id'),
        'email_verified_at' => now(),
    ];
});
