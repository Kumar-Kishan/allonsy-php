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


Route::post('/post', 'AppController@MakePost')->middleware('auth');

Route::post('/profileImage', 'UserController@ChangeProfilePic')->middleware('auth');
