<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


Route::get('/home', 'HomeController@index');

Route::get('/','AppController@welcome');

Route::post('/preferences', 'AppController@SavePreferences')->middleware('auth');
Route::get('/setPreferences', 'AppController@SetPreferences')->middleware('auth');


Route::get('/feed','AppController@FeedPage')->middleware('auth');
Route::get('/company','AppController@CompanyPage');
Route::get('/userprofile','AppController@UserPage')->middleware('auth');

Route::post('/post', 'AppController@MakePost')->middleware('auth');

Route::post('/profileImage', 'UserController@ChangeProfilePic')->middleware('auth');

Route::get('/user', 'AppController@GetCurrentUser')->middleware('auth');

Route::get('/feeds/{random_number}', 'UserController@UserFeed')->middleware('auth');

<<<<<<< HEAD

Route::get('/settings', function(){
    return 'you will get settings';
=======
Route::get('/media/{media_id}', function($id){
    return App\Media::find($id);
>>>>>>> d3281b1cb00596b64932d2e4085f8d2fb605f0ee
});