<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Import trait Authenticatable
use Illuminate\Database\Eloquent\Model;

class userSignUp extends Authenticatable // Pastikan model menggunakan trait Authenticatable
{

    use HasFactory;

    protected $table = 'user_sign_up';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama', 'email', 'password', 
    ];

    public function profil()
    {
        return $this->hasMany(pegawai::class, 'nama', 'nama');
    }

    public function absens()
    {
        return $this->hasMany(absen::class, 'nama_pegawai', 'nama');
    }

    public function absen_keluars()
    {
        return $this->hasMany(AbsenKeluar::class, 'nama_pegawai', 'nama');
    }

    public function cutis()
    {
        return $this->hasMany(cuti::class, 'nama', 'nama');
    }

    public function gajis()
    {
        return $this->hasMany(gaji::class, 'nama', 'nama');
    }
}
