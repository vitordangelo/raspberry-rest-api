<?php

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->safeEmail,
//         'password' => bcrypt(str_random(10)),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\Dht11::class, function (Faker\Generator $faker) {
    return [
        'temperatura' => $faker->numberBetween($min = 0, $max = 32),
        'umidade' => $faker->numberBetween($min = 0, $max = 85),
    ];
});
