<?php
use App\Berita;
use App\kategori;
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
    return view('index');
});
Route::get('/news', 'TampilController@news');

Route::get('/isi', function(){
   return view('news'); 
});

Route::get('/login', function () {
    return view('login');
    
});
Route::get('/lihat', 'TampilController@lihat');

Route::get('/tampil/berita', 'TampilController@news')->name('berita');
Route::get('/tampil/baru', 'TampilController@baru');
Route::post('/tampil', 'TampilController@store');

Route::get('/tampil', 'TampilController@index')->name('lihatdata');

Route::get('/tampil/edit/{id_berita}', 'TampilController@edit');
Route::put('/tampil/{id_berita}', 'TampilController@update');

Route::get('/tampil/hapus/{id_berita}', 'TampilController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
