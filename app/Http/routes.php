<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//getting the login page
Route::get('/register', array('uses' => 'UsersController@registerPage', 'as' => 'register'));
Route::post('login', array('uses' => 'UsersController@postLogin', 'as' => 'postLogin'));
Route::get('login', array('uses' => 'UsersController@getLogin', 'as' => 'login'));
Route::get('/auth/login', array('uses' => 'UsersController@getLogin'));
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', array('uses' => 'BeatportController@searchView', 'as' => 'search'));
});
Route::post('register', array('uses' => 'UsersController@postRegister', 'as' => 'postRegister'));
Route::get('logout', array('uses' => 'UsersController@getLogout', 'as' => 'getLogout'));
Route::get('/artists', array('uses' => 'BeatportController@getAllArtists'));
Route::get('/genres', array('uses' => 'BeatportController@getAllGenres'));
Route::post('/search/tracks', array('uses' => 'BeatportController@findTracks'));
