<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
    public function awal(){
   return "Hello dari RuanganController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$Ruangan = new Ruangan();
   	$Ruangan->title = '411A';
   	$Ruangan->save();
   	return "data dengan Ruangan ($Ruangan->title) telah disimpan";

   }
}
