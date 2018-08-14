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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
   });
});

/**
Route::get('/', function () {
    return view('welcome');
});
**/
Route::get('/ficha', function () {
    return view('fichaInscripcion');
});

Route::get('/fichaPostulante', function () {
    return view('fichaInscripcionPostulante');
});

Auth::routes();

Route::post('/ficha/create','ApoderadosController@create');

Route::get('/logout', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
