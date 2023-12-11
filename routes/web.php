<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('linktree', function(){
return view('linktree');
});

Route::get('tugas2', function(){
    return view('tugas2');
    });

Route::get('index', function(){
    return view('index');
    });

Route::get('materi1', function(){
    return view('materi1');
    });

Route::get('materi2', function(){
    return view('materi2');
    });

Route::get('materi3', function(){
    return view('materi3');
    });

Route::get('materi4', function(){
    return view('materi4');
    });

Route::get('materi5', function(){
    return view('materi5');
    });

Route::get('blog1', function(){
    return view('blog');
    });

Route::get('/blog', function(){
    return view('home');
    });

Route::get('/blog/tentang', function(){
    return view('tentang');
    });
Route::get('/blog/kontak', function(){
    return view('kontak');
    });

Route::get('perkalian', 'App\Http\Controllers\MahasiswaController@index');

Route::get('biodata', 'App\Http\Controllers\MahasiswaController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\MahasiswaController@showtime');

Route::post('/formulir/proses', 'App\Http\Controllers\MahasiswaController@proses');

Route::get('formulir', 'App\Http\Controllers\MahasiswaController@formulir');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//Route Nilai Kuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//Route Harddisk
Route::get('/harddisk','App\Http\Controllers\harddiskController@index');
Route::get('/harddisk/tambah','App\Http\Controllers\harddiskController@tambah');
Route::post('/harddisk/store','App\Http\Controllers\harddiskController@store');
Route::get('/harddisk/edit/{id}', 'App\Http\Controllers\harddiskController@edit');
Route::post('/harddisk/update','App\Http\Controllers\harddiskController@update');
Route::get('/harddisk/hapus/{id}','App\Http\Controllers\harddiskController@hapus');


//Route CRUD Data Karyawan
Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
