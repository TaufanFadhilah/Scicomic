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

Route::get('/material/water', function () {
    return view('materials.water');
})->name('material.water');

Route::get('/material/land', function () {
    return view('materials.land');
})->name('material.land');

Route::get('/material/air', function () {
    return view('materials.air');
})->name('material.air');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.index');
