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

Route::get('jadwal_matakuliah/tambah','Jadwal_matakuliahController@tambah');
Route::get('jadwal_matakuliah','Jadwal_matakuliahController@awal');

Route::get('dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');
Route::get('dosen_matakuliah','Dosen_matakuliahController@awal');

Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan','RuanganController@awal');

Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('matakuliah','MatakuliahController@awal');

Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa','MahasiswaController@awal');

Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen','DosenController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna','PenggunaController@awal');

Route::get('pengguna/lihat/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');

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

Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{Mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{Mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{Mahasiswa}','MahasiswaController@hapus');





Route::get('/', function () {
    return view('master');
});
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "HAI $pengguna";
});

Route::auth();

Route::get('/home', 'HomeController@index');
