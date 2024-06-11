<?php

use App\Http\Controllers\Api\Absencontroller;
use App\Http\Controllers\Api\AbsenKeluarcontroller;
use App\Http\Controllers\Api\Cuticontroller;
use App\Http\Controllers\Api\Gajicontroller;
use App\Http\Controllers\Api\Jabatancontroller;
use App\Http\Controllers\Api\Pegawaicontroller;
use App\Models\AbsenKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('absen', [Absencontroller::class, 'index']);
Route::get('absen/{id}', [Absencontroller::class, 'show']);
Route::post('absen', [Absencontroller::class, 'store']);
Route::put('absen/{id}', [Absencontroller::class, 'update']);
Route::delete('absen/{id}', [Absencontroller::class, 'destroy']);

Route::get('absenkeluar', [AbsenKeluarcontroller::class, 'index']);
Route::get('absenkeluar/{id}', [AbsenKeluarcontroller::class, 'show']);
Route::post('absenkeluar', [AbsenKeluarcontroller::class, 'store']);
Route::put('absenkeluar/{id}', [AbsenKeluarcontroller::class, 'update']);
Route::delete('absenkeluar/{id}', [AbsenKeluarcontroller::class, 'destroy']);

Route::get('cuti', [Cuticontroller::class, 'index']);
Route::get('cuti/{id}', [Cuticontroller::class, 'show']);
Route::post('cuti', [Cuticontroller::class, 'store']);
Route::put('cuti/{id}', [Cuticontroller::class, 'update']);
Route::delete('cuti/{id}', [Cuticontroller::class, 'destroy']);

Route::get('gaji', [Gajicontroller::class, 'index']);
Route::get('gaji/{id}', [Gajicontroller::class, 'show']);
Route::post('gaji', [Gajicontroller::class, 'store']);
Route::put('gaji/{id}', [Gajicontroller::class, 'update']);
Route::delete('gaji/{id}', [Gajicontroller::class, 'destroy']);

Route::get('jabatan', [Jabatancontroller::class, 'index']);
Route::get('jabatan/{id}', [Jabatancontroller::class, 'show']);
Route::post('jabatan', [Jabatancontroller::class, 'store']);
Route::put('jabatan/{id}', [Jabatancontroller::class, 'update']);
Route::delete('jabatan/{id}', [Jabatancontroller::class, 'destroy']);

Route::get('pegawai', [Pegawaicontroller::class, 'index']);
Route::get('pegawai/{id}', [Pegawaicontroller::class, 'show']);
Route::post('pegawai', [Pegawaicontroller::class, 'store']);
Route::put('pegawai/{id}', [Pegawaicontroller::class, 'update']);
Route::delete('pegawai/{id}', [Pegawaicontroller::class, 'destroy']);