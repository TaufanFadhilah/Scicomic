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
})->name('home');

Route::get('/kikd', function () {
    return view('KIKD');
})->name('kikd');

Route::get('/objective', function () {
    return view('objective');
})->name('objective');

Route::get('/materials', function () {
    return view('materials');
})->name('materials');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.index');
