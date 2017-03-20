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
       

        
        for ($i=1; $i < 101; $i++) { 
            factory(App\User::class)->create();
            if($i%10 == 0) {
                echo $i.' users created'."\n";
            }
        }

        for ($i=1; $i < 101; $i++) { 
            factory(App\Location::class)->create();
            if($i%10 == 0) {
                echo $i.'  locations'."\n";
            }
        }
        for ($i=1; $i < 101; $i++) { 
            factory(App\Company::class)->create();
            if($i%10 == 0) {
                echo $i.'  companies'."\n";
            }
        }
        for ($i=1; $i < 101; $i++) { 
            factory(App\Post::class)->create();
            if($i%10 == 0) {
                echo $i.' posts created'."\n";
            }
        }
        for ($i=1; $i < 101; $i++) { 
            factory(App\Review::class)->create();
            if($i%10 == 0) {
                echo $i.' reviews created'."\n";
            }
        }
        
        
    
        
    }
}
