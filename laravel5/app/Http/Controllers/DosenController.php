<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
       public function awal(){
   	return "Hello dari DosenController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$dosen = new dosen();
   	$dosen->nama = 'Erwin Rezkiawan';
   	$dosen->nip = '1231546424';
   	$dosen->alamat ='Jalan Kedondong';
   	$dosen->pengguna_id = 1;
   	$dosen->save();
   	return "data dengan username ($dosen->nama) telah disimpan";

   }
}
