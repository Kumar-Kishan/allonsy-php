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

$factory->define(App\Location::class, function (Faker\Generator $faker) {
    return [
        'lat' => $faker->latitude($min = -90, $max = 90),
        'long' => $faker->longitude($min = -180, $max = 180),
        'geo_address' => $faker->address,
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {
    
    return [
        'type' => $faker->numberBetween(0,1),
        'path' => 'abc.jpg',
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->companyEmail,
        'contact_no' => $faker->phoneNumber,
        'user_id' => $faker->numberBetween(1,100),
        'location_id' => $faker->numberBetween(1,1000),
        'about' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'website' => $faker->url,
    ];
});



// $factory->define(App\Story::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'type' => $faker->numberBetween(0,1),
//         'user_id' => $faker->numberBetween(0,99),
//     ];
// });

// $factory->define(App\Review::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'story_id' => $faker->numberBetween(0,1000),
//         'media_id' => $faker->numberBetween(0,1000),
//         'location_id' => $faker->numberBetween(0,1000),
//         'text' => $faker->realText($maxNbChars = 200, $indexSize = 2),
//         'rating' =>$faker->numberBetween(0,5),
//     ];
// });

$factory->define(App\Promotion::class, function (Faker\Generator $faker) {
    return [
        'media_id' => $faker->numberBetween(0,1000),
        'company_id' => $faker->numberBetween(1,100),
        'schemes' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});

// $factory->define(App\Post::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'story_id' => $faker->numberBetween(0,1000),
//         'media_id' => $faker->numberBetween(0,1000),
//         'text' => $faker->realText($maxNbChars = 200, $indexSize = 2),
//         'fistbump' => $faker->numberBetween(0,1000),
//     ];
// });

// $factory->define(App\RateReview::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'story_id' => $faker->numberBetween(0,1000),
//         'user_id' => $faker->numberBetween(0,1000),
//         'text' => $faker->realText($maxNbChars = 200, $indexSize = 2),
//         'rating' => $faker->numberBetween(0,5),
//     ];
// });