<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('agenda', 'AgendaController@index');

Route::get('pemasukan', 'PemasukanController@index');
Route::get('pemasukan/create', 'PemasukanController@create');

Route::get('pengeluaran', 'PengeluaranController@index');
Route::get('pengeluaran/create', 'PengeluaranController@create');

Route::get('kategori', 'KategoriController@index');
Route::get('kategori/create', 'KategoriController@create');

Route::get('anggaran', 'AnggaranController@index');
Route::get('anggaran/create', 'AnggaranController@create');

Route::get('timeline', 'TimelineController@index');
Route::get('timeline/create', 'TimelineController@create');