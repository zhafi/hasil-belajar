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

Route::get('/', function () {
    return view('welcome');
});
Route::get('informasi', function() {
	return view('informasi');
});

Auth::routes(['verify'=>false]);
Route::group(['middleware'=> ['auth', 'ceklevel:admin']], function(){
	Route::get('makanans', 'MakananController@tabel');

	Route::get('orderan', 'AdminController@index');
Route::get('pesanan/edit/{id}', 'AdminController@edit');
Route::post('pesanan/edit/{id}', 'AdminController@update')->name('edit-pesanan');

	Route::get('admin/{id}', 'AdminController@detail');


Route::view('form-tambah-makanan', 'Master.tambah-makanan');
Route::post('tambah-makanan', 'MakananController@insert')->name('tambah-makanan');
Route::get('makanan/edit/{id}', 'MakananController@edit');
Route::post('makanan/edit/{id}', 'MakananController@update')->name('edit-makanan');
Route::get('makanan/delete/{id}', 'MakananController@delete');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route:: get('konfirmasi-check-out','PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('riwayat', 'RiwayatController@index');
Route::get('riwayat/{id}', 'RiwayatController@detail');
Route::get('pembayaran/{id}', 'RiwayatController@cetak');

Route::get('pembayaran', 'PembayaranController@index');
Route::get('pembayaran/{id}', 'PembayaranController@detail');


Route::get('password.check', function () {
    return view('auth.passwords.check');
});

Route::post('auth.passwords.check', 'UsersController@passwordsCheckEmail')->name('passwords.check.email');
Route::get('passwords/manual/reset/{email}', 'UsersController@passwordsManualReset')->name('passwords.manual.reset');
Route::post('passwords/manual/change/{user}', 'UsersController@passwordsManualChange')->name('passwords.manual.change');
