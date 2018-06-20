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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Logged In Routes
Route::group(
    ['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('room', 'RoomController');
    Route::post('room/getLocations/{id}', 'RoomController@getLocations');
    Route::post('getLocations/{id}', 'RoomController@getLocations');

    Route::get('user/inbox', 'UserController@inbox');
    Route::resource('user', 'UserController');
});