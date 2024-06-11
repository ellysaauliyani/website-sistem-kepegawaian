<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    protected $table = 'gaji';
    protected $primaryKey = 'id';
    protected $fillable = [
     'id', 'nama', 'nama_jabatan','jumlah', 'tanggal_pembayaran'
    ];

    public function user()
   {
    return $this->belongsTo(userSignUp::class, 'nama', 'nama');
   }
}

