<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rol;
use Faker\Generator as Faker;

$factory->define(App\Rol::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->randomElement(['ingeniero','programador','diseñador','arquitecto de software']),
        'detalles' => [
          "funcionalidad" =>$faker->sentences($nb = 3, $asText = false),
          "horas de trabajo semanal" =>$faker->randomFloat ($min = 25, $max = 45),
        ],
    ];
});
