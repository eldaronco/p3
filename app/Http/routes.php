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

Route::get('/', function () {
    return view('index');
});
Route::get('/lorem_ipsum', function () {
    return view('LIGen.paras');
});
Route::get('/random_user', function () {
    return view('RandUser.users');
});

Route::get('/lorem_ipsum', 'LIGenController@getParas');
Route::post('/lorem_ipsum', 'LIGenController@postNumParas');

Route::get('/random_user', 'RandUserController@getUsers');
Route::post('/random_user', 'RandUserController@postNumUsers');
