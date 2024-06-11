<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class signUp extends Authenticatable // Pastikan model menggunakan trait Authenticatable

{
    protected $table = 'sign_up';
    protected $primaryKey = 'id';
    protected $fillable = [
     'id', 'email', 'password', 
    ];
}


