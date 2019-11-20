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

Route::get('/login', 'AuthController@indexLogin')->name('login');
Route::post('/login', 'AuthController@checkLogin')->name('checkLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::prefix('admin')->middleware(['auth','revalidate'])->group(function(){
    Route::get('/', 'AdministratorController@index');
});

Route::prefix('ketua')->middleware(['auth','revalidate'])->group(function(){
    Route::get('/', 'KetuaController@index');
});

Route::prefix('siswa')->middleware(['auth','revalidate'])->group(function(){
    Route::get('/', 'SiswaController@index');
});

//---------------------------------------------- KAS

Route::get('/transaksi/gettransaksi', 'TransaksiController@gettransaksi')->name('gettransaksi');
Route::get('/transaksi/addtransaksi', 'TransaksiController@addtransaksi')->name('addtransaksi');
Route::post('/transaksi/posttransaksi', 'TransaksiController@posttransaksi')->name('posttransaksi');
Route::get('/transaksi/gettotal','TransaksiController@gettotal')->name('gettotal');

//------------------------------------------------ RANDOM CHAIR CLASS

Route::get('/transaksi/random/{val}','TransaksiController@random')->name('random');
