<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{

    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $fillable = [
     'id', 'NIK', 'nama', 'jenis_kelamin', 'jabatan', 'tanggal_masuk', 'status',
    ];

    public function user()
    {
     return $this->belongsTo(userSignUp::class, 'nama', 'nama');
    }
    
 }
 