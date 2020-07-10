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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'home');

// Route::get('/', function() {
//     $name = request('name');
//     return view('home', ['name' => $name]);
// });

// with controller
// Route::get('/', 'HomeController@index');

// with controller invoke
Route::get('/', 'HomeController');
Route::get('posts/{slug}', 'PostController@show');
Route::view('/login', 'login');
Route::view('/about', 'about');
Route::view('/contact', 'contact');


Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');