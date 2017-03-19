<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,100)->create();
        factory(App\Location::class,1000)->create();
        factory(App\Company::class,100)->create();
        
        factory(App\Media::class,100)->create();
        
        factory(App\Story::class,100)->create();
        
        factory(App\Review::class,100)->create();
        
        factory(App\Promotion::class,100)->create();
        factory(App\RateReview::class,100)->create();
    
        
    }
}
