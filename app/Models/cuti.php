<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    protected $table = 'cuti';
    protected $primaryKey = 'id';
    protected $fillable = [
     'id', 'NIK', 'nama', 'tgl_pengajuan', 'lama_cuti', 'tgl_awal', 'tgl_akhir', 'keterangan'
    ];

    public function user()
   {
    return $this->belongsTo(userSignUp::class, 'nama', 'nama');
   }
   
}
