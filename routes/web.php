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

Route::get('/', function() {
    return redirect(route('login'));
});

Route::get('/', function () {
    return view('web.home');
});

//routes ke halaman daftar event
Route::get('/list-event', 'HomeController@ListEvent')->name('list-event');

Route::get('/starter', 'starterController@index')->name('starter');

// Routes Landing Page
Route::get('/home', 'HomeController@index')->name('home');

// Detail Event
Route::get('/detail', 'DetailController@index')->name('detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
