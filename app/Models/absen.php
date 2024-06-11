<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    protected $table = 'absen';
   protected $primaryKey = 'id';
   protected $fillable = [
    'id', 'nama_pegawai', 'tanggal', 'waktu_masuk',
   ];

   public function user()
   {
    return $this->belongsTo(userSignUp::class, 'nama_pegawai', 'nama');
   }
}

