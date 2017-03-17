<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MataKuliahController extends Controller
{
    public function awal(){
   return "Hello dari MataKuliahController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$Matakuliah = new Matakuliah();
   	$Matakuliah->title = 'Framework';
   	$Matakuliah->keterangan = 'WAJIB';
   	$Matakuliah->save();
   	return "data dengan Matakuliah ($Matakuliah->title) telah disimpan";

   }
}
