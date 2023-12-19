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

Route::get('/', 'HomeController@index', function () {
    return view('web.home');
});

Auth::routes();

// Routes Membatasi Hanya Role Admin
Route::middleware('role:admin')->group(function () {
    // Routes Dashboard Admin
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    // Route Daftar User
    Route::get('/user', 'UserController@index')->name('user.index');
    Route::get('users', 'UserController@index')->name('users.index');
    // User Create
    Route::get('users/create', 'UserController@create')->name('users.create');
    Route::post('users', 'UserController@store')->name('users.store');
    // User Edit
    Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::put('/users/{id}', 'UserController@update')->name('users.update');
    // Hapus User
    Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');
});

Route::middleware(['role:admin|organizer'])->group(function () {
    // Route Penyelenggara
    Route::get('/dashboard-organizer', 'OrganizerController@index')->name('dashboard-organizer');

    //Event List
    Route::get('/daftar-event', 'EventController@index')->name('daftar.event');

    //Event Create
    Route::get('/daftar-event/buat-event', 'EventController@create')->name('event.create');
    Route::post('/daftar-event/buat-event', 'EventController@store')->name('event.store');

    //Edit & Update
    Route::get('/daftar-event/{event}/edit', 'EventController@edit')->name('event.edit');
    Route::put('/daftar-event/{event}/edit', 'EventController@update')->name('event.update');
    Route::get('/daftar-event/{event}/delete', 'EventController@destroy')->name('event.destroy');
});

// Home Landing Page
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events/{id}', 'EventController@show')->name('events.show');

Route::get('/events/{id}/form-pembayaran', 'FormpembayaranController@show')->name('form-pembayaran.show');


//routes ke halaman daftar event
Route::get('/list-event', 'HomeController@ListEvent')->name('list-event');

// Detail Event
// Route::get('/detail', 'DetailController@index')->name('detail');

Route::get('/form-pembayaran', 'FormpembayaranController@index')->name('form-pembayaran');

Route::get('/tiket-saya', 'TiketSayaController@index')->name('tiket-saya');

Route::get('/informasi-akun', 'InformasiAkunController@index')->name('informasi-akun');
Route::post('/informasi-akun/update-profile/{id}', 'InformasiAkunController@update')->name('update.profile');

