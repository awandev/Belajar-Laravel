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

// untuk softdelete
Route::get('/pegawai/trash', 'PegawaiController@trash');
Route::get('/pegawai/delete_permanent/{id}', 'PegawaiController@delete_permanent');
Route::get('/pegawai/delete_permanent_all', 'PegawaiController@delete_permanent_all');
Route::get('/pegawai/restore/{id}','PegawaiController@restore');
Route::get('/pegawai/restore_all', 'PegawaiController@restore_all');

// untuk belajar relationship (One to One)
Route::get('/pengguna', 'PenggunaController@index');

// untuk belajar relationship ( One to Many )
Route::get('/artikel', 'WebController@index');

// untuk belajar relationship (many to many)
Route::get('/anggota', 'AnggotaController@index');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// untuk upload images, learn from https://www.itsolutionstuff.com/post/laravel-7-ajax-image-upload-tutorialexample.html
Route::get('ajaxImageUpload','AjaxImageUploadController@ajaxImageUpload');
Route::post('ajaxImageUpload','AjaxImageUploadController@ajaxImageUploadPost')->name('ajaxImageUpload');


// belajar enkripsi , https://www.malasngoding.com/encrypt-dan-decrypt-laravel/
Route::get('/enkripsi', 'EnkripsiController@enkrip');
