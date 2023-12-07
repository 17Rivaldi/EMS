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

// Route::get('/', function () {
//     return redirect(route('login'));
// });

Route::get('/', function () {
    return view('web.home');
});

Auth::routes();

// Routes Membatasi Hanya Role Admin
Route::middleware('role:admin')->group(function () {
    // Routes Dashboard Admin
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');

//routes ke halaman daftar event
Route::get('/list-event', 'HomeController@ListEvent')->name('list-event');

// Detail Event
Route::get('/detail', 'DetailController@index')->name('detail');

Route::get('/form-pembayaran', 'FormpembayaranController@index')->name('form-pembayaran');

Route::get('/tiket-saya', 'TiketSayaController@index')->name('tiket-saya');

Route::get('/informasi-akun', 'InformasiAkunController@index')->name('informasi-akun');
