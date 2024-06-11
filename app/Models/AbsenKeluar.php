<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenKeluar extends Model
{
protected $table = 'absen_keluar';
   protected $primaryKey = 'id';
   protected $fillable = [
    'id', 'nama_pegawai', 'tanggal_keluar', 'waktu_keluar',
   ];

   public function user()
   {
    return $this->belongsTo(userSignUp::class, 'nama_pegawai', 'nama');
   }
}