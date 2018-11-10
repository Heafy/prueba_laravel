<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Perfil::class, function (Faker $faker) {
    return [
        'perfil_nombre' => $faker->word,
        'perfil_descripcion' => $faker->word
    ];
});

$factory->define(App\Modulo::class, function (Faker $faker) {
    return [
        'modulo_nombre' => $faker->word,
        'modulo_nombre_corto' => $faker->word,
        'modulo_ruta' => $faker->word,
        'modulo_escritorio' => $faker->boolean,
    ];
});

$factory->define(App\Modulo_Perfil::class, function (Faker $faker) {
    return [
        'modulo_id' => $faker->numberBetween(1,50),
        'perfil_id' => $faker->numberBetween(1,50)
    ];
});

$factory->define(App\Usuario::class, function (Faker $faker) {
    return [
        'perfil_id' => $faker->numberBetween(1,50),
        'usuario_nombre' => $faker->word,
        'usuario_ap_paterno' => $faker->word,
        'usuario_ap_materno' => $faker->word,
        'password' => bcrypt('passCTE'),
        'email' => $faker->unique()->safeEmail,
        'usuario_telefono' => $faker->phoneNumber,
        'usuario_activo' => $faker->boolean,
        'remember_token' => str_random(10),
    ];
});