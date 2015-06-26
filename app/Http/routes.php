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


<<<<<<< HEAD

Route::get('/moja_zmiana', function () {
    return 'ale nie ma najświeższej wersji repozytorium';
});





=======
Route::get('/test4', function () {
    return 'to dodalem z github edytora.';
});


>>>>>>> 22a66d03ef553c4298d22008978fd246b7ceed8b
