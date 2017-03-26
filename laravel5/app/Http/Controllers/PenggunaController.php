<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
   public function awal()
   {
      return view('Pengguna.awal',['data'=>Pengguna::all()]);
   }
   public function tambah()
   {
      return view('Pengguna.tambah');
   }
   public function simpan(Request $input)
   {

      $Pengguna = new Pengguna();
      $Pengguna->username = $input->username;
      $Pengguna->password = $input->password;
      $informasi->$Pengguna->save() ? 'Berhasil simpan data'  : 'Gagal simpan data';
      return redirect('Pengguna')->width(['ínformasi'=>$informasi]);
   }
   public function edit($id)
   {
         $Pengguna = Pengguna::find($id);
         return view('Pengguna.edit')->with(array('Pengguna'=>$Pengguna));
    }
    public function lihat($id)
    {
        $Pengguna = Pengguna::find($id);
        return view('Pengguna.lihat')->with(array('Pengguna'=>$Pengguna));
    }
    public function update($id, Request $input)
    {
        $Pengguna = Pengguna::find($id);
        $Pengguna->username = $input->username;
        $Pengguna->password = $input->password;
        $informasi = $Pengguna->save()? 'berhasil update data' : 'gagal update data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $Pengguna = Pengguna::find($id);
        $informasi = $pengguna->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
    }


   }
  /* public function awal(){
   	return "Hello dari PenggunaController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$pengguna = new Pengguna();
   	$pengguna->username = 'jon_doe';
   	$pengguna->password = 'doe_joe';
   	$pengguna->save();
   	return "data dengan username ($pengguna->username) telah disimpan";

   }*/

