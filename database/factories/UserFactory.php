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


$factory->define(\App\Opteam\Models\UserRole::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['admin', 'trainer', 'trainee']),
    ];
});

$factory->define(App\Opteam\Models\User::class, function (Faker $faker) {
    static $password;
   $id=  \App\Opteam\Models\UserRole::firstOrCreate([
        'name'=> $faker->randomElement(['admin', 'trainer', 'trainee'])
    ])->first()->id;
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'role_id' => $id,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
