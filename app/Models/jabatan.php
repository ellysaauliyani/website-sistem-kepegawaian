<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table = 'jabatan';
    protected $primaryKey = 'id';
    protected $fillable = [
     'id', 'nama_jabatan', 'gaji_dasar', 
    ];
}
