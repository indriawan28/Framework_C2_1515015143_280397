<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal(){
   return "Hello dari MahasiswaController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$Mahasiswa = new Mahasiswa();
   	$Mahasiswa->nama = 'Zainal Arifin';
   	$Mahasiswa->nim = '1515015137';
   	$Mahasiswa->alamat = 'SUandi';
   	$Mahasiswa->pengguna_id = 1;
   	$Mahasiswa->save();
   	return "data dengan username ($Mahasiswa->nama) telah disimpan";

   }

}
