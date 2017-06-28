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


$factory->define(App\Company::class, function (Faker\Generator $faker) {
    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->companyEmail,
        'contact_no' => $faker->phoneNumber,
        'user_id' => $faker->numberBetween(1,100),
        'location_id' => $faker->numberBetween(1,100),
        'about' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'website' => $faker->url,
    ];
});


$factory->define(App\Post::class,function (Faker\Generator $faker){

    $story = factory(App\Story::class)->make(['type' => 'posts']);
    $story->save();
    return [
        'text' => $faker->realText(200,2),
        'media_id' => factory(App\Media::class)->create()->id,
        'story_id' => $story->id,
        'fistbump' => 0,  
    ];
});
$factory->define(App\Review::class,function (Faker\Generator $faker){

    $story = factory(App\Story::class)->make(['type' => 'review']);
    $story->save();

    $ratings = array('1','2','3','4','5');

    return [
        'text' => $faker->realText(200,2),
        'media_id' => factory(App\Media::class)->create()->id,
        'story_id' => $story->id,
        'location_id'=> factory(App\Location::class)->create()->id,
        'rating' => $ratings[rand()%5],
    ];
});
$factory->define(App\Media::class,function (Faker\Generator $faker){


    $paths = array('background.png', 'chill.jpg','food.jpg','pilgrimage.jpg', 'prefback.jpg', 'review.jpg');
    return [
        'type' => 'image',
        'path' => $paths[rand()%6],  
    ];
});

$factory->define(App\Story::class,function (Faker\Generator $faker){
    return [
        'user_id' => $faker->numberBetween(1,100),
    ];
});
