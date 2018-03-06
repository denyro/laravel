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

use App\User;

/**
Route::get('/', function () {
    return view('boos');
});*/

Route::get('/', 'PageController@getIndex');
Route::get('sosmed/facebook', 'PageController@getFacebook');
Route::get('mainmedia', 'PageController@getMainmedia');
Route::get('analisis', 'PageController@getAnalisis');
Route::get('wilayah', 'PageController@getWilayah');
Route::get('about', 'PageController@getAbout');
Route::get('contact', 'PageController@getContact');
Route::get('charts', 'PageController@getCharts');
Route::resource('posts', 'PostController');

//Route::get('create', 'PostController@index');
//Route::post("/post/store", 'PostController@store')->name('post.store');

Route::get('users', function(){
	/**User::create([
		"name" => "macbeth",
		"email" => "mac@beth.com",
		"password" => bcrypt("pas123")
	]);*/


	return User::all();
});
