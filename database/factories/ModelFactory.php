<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->companyEmail,
        'contact_no' => $faker->phoneNumber,

        'location_id' => $faker->numberBetween(0,1000),
        'about' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'website' => $faker->nullable()->url,
    ];
});

$factory->define(App\Location::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'lat' => $faker->latitude($min = -90, $max = 90),
        'long' => $faker->longitude($min = -180, $max = 180),
        'geo_address' => $faker->address,
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'type' => $faker->numberBetween(0,1),
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'type' => $faker->numberBetween(0,1),
    ];
});