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

Route::get('/123', function () {
    $json = json_decode(file_get_contents("http://www.tagesschau.de/api2/"), true);

    dd($json);
});
Route::get('/home', 'HomeController@index')->name('home');
