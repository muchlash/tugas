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
//route mencoba fungsi many to many

Route::get('/isi', function(){
   return view('news');
//route melihat isi template blade
});

Route::get('/login', function () {
    return view('login');

});
Route::get('/lihat', 'TampilController@lihat');
//route melihat antar tabel many to many

Route::get('/tampil/baru', 'TampilController@baru');
Route::post('/tampil', 'TampilController@store');
//Create data tabel Berita
Route::get('/tampil', 'TampilController@index')->name('lihatdata');
//menampilkan isi tabel berita
Route::get('/tampil/edit/{id_berita}', 'TampilController@edit');
Route::put('/tampil/{id_berita}', 'TampilController@update');
//update tabel Berita
Route::get('/tampil/hapus/{id_berita}', 'TampilController@delete');
//delete tabel berita
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
