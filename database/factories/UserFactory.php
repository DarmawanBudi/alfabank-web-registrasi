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
    $gender = ['P','L'];
    $agama = ['islam','kristen','katolik','hindu','budha'];
    return [
        'nama' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telepon' => $faker->phoneNumber,
        'alamat' => $faker->address,
        'tanggal_lahir' => $faker->date,
        'gender' => $gender[rand(0,1)],
        'agama' => $agama[rand(0,4)],
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
