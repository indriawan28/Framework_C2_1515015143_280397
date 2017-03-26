<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('Jadwal_Matakuliah/tambah','Jadwal_MatakuliahController@tambah');
Route::get('Jadwal_Matakuliah','Jadwal_MatakuliahController@awal');

Route::get('Dosen_Matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('Dosen_Matakuliah','Dosen_MatakuliahController@awal');

Route::get('Ruangan/tambah','RuanganController@tambah');
Route::get('Ruangan','RuanganController@awal');

Route::get('Matakuliah/tambah','MataKuliahController@tambah');
Route::get('Matakuliah','MataKuliahController@awal');

Route::get('Mahasiswa/tambah','MahasiswaController@tambah');
Route::get('Mahasiswa','MahasiswaController@awal');

Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen','DosenController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna','PenggunaController@awal');

Route::get('Pengguna/lihat/{Pengguna}','PenggunaController@lihat');
Route::post('Pengguna/simpan','PenggunaController@simpan');
Route::get('Pengguna/edit/{Pengguna}','PenggunaController@edit');
Route::post('Pengguna/edit/{Pengguna}','PenggunaController@update');
Route::get('Pengguna/hapus/{Pengguna}','PenggunaController@hapus');

Route::get('MataKuliah/lihat/{MataKuliah}','MataKuliahController@lihat');
Route::post('MataKuliah/simpan','MataKuliahController@simpan');
Route::get('MataKuliah/edit/{MataKuliah}','MataKuliahController@edit');
Route::post('MataKuliah/edit/{MataKuliah}','MataKuliahController@update');
Route::get('MataKuliah/hapus/{MataKuliah}','MataKuliahController@hapus');

Route::get('Ruangan/lihat/{Ruangan}','RuanganController@lihat');
Route::post('Ruangan/simpan','RuanganController@simpan');
Route::get('Ruangan/edit/{Ruangan}','RuanganController@edit');
Route::post('Ruangan/edit/{Ruangan}','RuanganController@update');
Route::get('Ruangan/hapus/{Ruangan}','RuanganController@hapus');




Route::get('/', function () {
    return view('welcome');
});
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "HAI $pengguna";
});

Route::auth();

Route::get('/home', 'HomeController@index');
