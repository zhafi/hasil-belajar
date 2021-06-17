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

use App\Http\Controllers\controller1;
use App\Http\Controllers\kelascontroller;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/iku', 'controller1@index');

Route::view('/Ini','Ini');
Route::view('/Modal', 'Modal');
Route::view('/gtw', 'gtw');

Auth::routes(['verify'=>false]);
Route::group(['middleware'=> ['auth']], function(){
    Route::get('gurutable', 'gurucontroller@tabel');
    Route::get('pelajarantable', 'pelajarancontroller@tabel');
    Route::get('ruangtable', 'ruangcontroller@tabel');
    Route::get('kelastable', 'kelascontroller@tabel');
    Route::get('jadwaltabel', 'jadwalcontroller@tabel');
 
Route::view('form-tambah-guru', 'Master.tambah-guru');
Route::post('tambah-guru', 'gurucontroller@insert')->name('tambah-guru');
Route::get('deleteguru/{id}','gurucontroller@delete');
Route::get('guru/edit/{id}', 'gurucontroller@edit');
Route::post('guru/edit/{id}', 'gurucontroller@update')->name('edit-guru');

Route::view('form-tambah-pelajaran', 'Master.tambah-pelajaran');
Route::post('tambah-pelajaran', 'pelajarancontroller@insert')->name('tambah-pelajaran');
Route::get('deletepelajaran/{id}','pelajarancontroller@delete');
Route::get('pelajaran/edit/{id}', 'pelajarancontroller@edit');
Route::post('pelajaran/edit/{id}', 'pelajarancontroller@update')->name('edit-pelajaran');

Route::view('form-tambah-ruang', 'Master.tambah-ruang');
Route::post('tambah-ruang', 'ruangcontroller@insert')->name('tambah-ruang');
Route::get('deleteruang/{id}','ruangcontroller@delete');
Route::get('ruang/edit/{id}', 'ruangcontroller@edit');
Route::post('ruang/edit/{id}', 'ruangcontroller@update')->name('edit-ruang');

Route::view('form-tambah-kelas', 'Master.tambah-kelas');
Route::post('tambah-kelas', 'kelascontroller@insert')->name('tambah-kelas');
Route::get('deletekelas/{id}','kelascontroller@delete');
Route::get('kelas/edit/{id}', 'kelascontroller@edit');
Route::post('kelas/edit/{id}', 'kelascontroller@update')->name('edit-kelas');

Route::get('form-tambah-jadwal', 'jadwalcontroller@form');
Route::post('tambah-jadwal', 'jadwalcontroller@insert')->name('tambah-jadwal');
Route::get('deletejadwal/{id}','jadwalcontroller@delete');
Route::get('jadwal/edit/{id}', 'jadwalcontroller@edit');
Route::post('jadwal/edit/{id}', 'jadwalcontroller@update')->name('edit-jadwal');

Route::get('uwaw', 'uwawcontroller@form');
Route::post('uwaw', 'uwawcontroller@insert')->name('tambah-uwaw');

Route::view('tabel', 'tabel');
Route::post('tabel', 'tabelcontroller@insert')->name('tambah-tabel');

});

Route::get('forgot.check', function () {
    return view('auth.forgot.check');
});

Route::post('auth.forgot.check', 'UserController@passwordsCheckEmail')->name('forgot.check.email');
Route::get('forgot/manual/reset/{email}', 'UserController@passwordsManualReset')->name('forgot.manual.reset');
Route::post('forgot/manual/change/{user}', 'UserController@passwordsManualChange')->name('forgot.manual.change');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
