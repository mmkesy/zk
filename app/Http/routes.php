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
    return view('welcome');
});

Route::get('/test', function () {
    return 'well done.';
});


Route::get('/test2', function () {
    return 'sprawdzenie działania git.';
});



Route::get('/test3', function () {
    return 'sprawdzenie działania 3 git.';
});


Route::get('/test4', function () {
    return 'to dodalem z github edytora.';
});


