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

//Route::get('/', 'OutletMapController@index');
Route::get('/', function () {
    return view('auth/login');
});

Route::get('/Daftar/Kegiatan','KegiatanController@uipengguna');

//Auth::routes(['verify' => true]);



//buku
Route::group(['prefix'=>'home','middleware'=>'akses.admin'], function() { //admin
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/Buku/Tambah','BukuController@form')->name('name.form.buku');
    Route::post('/Buku/Tambah','BukuController@tambah');
    Route::get('/Buku','BukuController@daftar')->name('name.daftar.buku'); 

    Route::get('/Kegiatan/Tambah','KegiatanController@form')->name('name.form.kegiatan');
    Route::post('/Kegiatan/Tambah','KegiatanController@tambah');
    Route::get('/Kegiatan','KegiatanController@daftar')->name('name.daftar.kegiatan');
     
});



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
