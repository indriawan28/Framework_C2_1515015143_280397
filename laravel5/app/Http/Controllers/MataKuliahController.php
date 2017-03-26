<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MataKuliah;

class MataKuliahController extends Controller
{

   public function awal()
    {
       return view('matakuliah.awal', ['data'=>MataKuliah::all()]);
    }
    public function tambah()
    {
      
         return view('matakuliah.tambah');
    }
    public function simpan(Request $input)
    {
        $matakuliah = new MataKuliah();
        $matakuliah->title = $input->title;
        $matakuliah->keterangan = $input->keterangan;
        $informasi = $matakuliah->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('matakuliah')->with(['infromasi'=>$informasi]);
    }
    public function edit($id)
    {
        $matakuliah = MataKuliah::find($id);
        return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
    }
    public function lihat($id)
    {
        $matakuliah = MataKuliah::find($id);
        return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }
    public function update($id, Request $input)
    {
        $matakuliah = MataKuliah::find($id);
        $matakuliah->title = $input->title;
        $matakuliah->keterangan= $input->keterangan;
        $informasi = $matakuliah->save()? 'berhasil update data' : 'gagal update data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $matakuliah = MataKuliah::find($id);
        $informasi = $matakuliah->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
}

/*{
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
}*/
