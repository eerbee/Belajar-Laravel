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

//ROUTE TAMPILAN DASHBOARD
Route::get('/dashboard', function () {
    return view('pages/backend/dashboard');
});

// ROUTE TAMPILAN DATA BUKU
// Route::get('/buku', 'BukuController@index');

//AKSES ROUTE DATA BUKU
Route::resource('buku','BukuController')->middleware('auth');

// ROUTE TAMPILAN KATEORI BUKU
// Route::get('/kategori', 'KategoriController@indexKategori');

//AKSES ROUTE DATA KATEGORI
Route::resource('kategori','KategoriController')->middleware('auth');

Auth::routes();

Route::get('/','BukuController@index')->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
