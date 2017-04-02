<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
   protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
    // protected $guarded- ['id'];
    
    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function Dosen_Matakuliah()
    {
        return $this->belongsTo(Dosen_Matakuliah::class);
    }
 }
