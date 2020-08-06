<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        // 'nama' => $faker->name(),
        // 'email' => $faker->unique()->safeEmail,
        // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        // 'remember_token' => Str::random(10),

        'nama' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('1234'), // password
        // 'remember_token' => Str::random(10),
    ];
});
