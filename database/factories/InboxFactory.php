<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inbox;
use Faker\Generator as Faker;

$factory->define(Inbox::class, function (Faker $faker) {
    return [
        // 'nama' => "aji syahroni",
        // 'email' => "aji_syahroni@gmail.com",
        // 'subjek' => "bertanya",
        // 'pesan' => "ingin bertanya",
        // 'status' => "belum_dibaca"

        'nama' => $faker->name(),
        'email' => $faker->unique()->safeEmail,
        'subjek' => "bertanya",
        'pesan' => $faker->text()
    ];
});
