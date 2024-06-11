<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('halaman_utama');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/signUp', [App\Http\Controllers\signUpController::class, 'index']);
Route::post('/simpan_signUp', [App\Http\Controllers\signUpController::class, 'store']);
Route::get('/signIn', [App\Http\Controllers\signUpController::class, 'showsignin']);
Route::post('/simpan_signIn', [App\Http\Controllers\signUpController::class, 'SignIn']);


Route::get('/data_pegawai', [App\Http\Controllers\PegawaiController::class, 'index']);

Route::get('/data_absen', [App\Http\Controllers\absenController::class, 'index']);

Route::get('/data_absen_keluar', [App\Http\Controllers\absenKeluarController::class, 'index']);

Route::get('/data_gaji', [App\Http\Controllers\gajiController::class, 'index']);

Route::get('/data_jabatan', [App\Http\Controllers\jabatanController::class, 'index']);

Route::get('/data_cuti', [App\Http\Controllers\cutiController::class, 'index']);


//tambah_data
Route::get('/tambah_pegawai', [App\Http\Controllers\PegawaiController::class, 'create']);
Route::post('/simpan_pegawai', [App\Http\Controllers\PegawaiController::class, 'store']);

Route::get('/tambah_absen', [App\Http\Controllers\absenController::class, 'create']);
Route::post('/simpan_absen', [App\Http\Controllers\absenController::class, 'store']);

Route::get('/tambah_absen_keluar', [App\Http\Controllers\absenKeluarController::class, 'create']);
Route::post('/simpan_absen_keluar', [App\Http\Controllers\absenKeluarController::class, 'store']);

Route::get('/tambah_gaji', [App\Http\Controllers\gajiController::class, 'create']);
Route::post('/simpan_gaji', [App\Http\Controllers\gajiController::class, 'store']);

Route::get('/tambah_jabatan', [App\Http\Controllers\jabatanController::class, 'create']);
Route::post('/simpan_jabatan', [App\Http\Controllers\jabatanController::class, 'store']);

Route::get('/tambah_cuti', [App\Http\Controllers\cutiController::class, 'create']);
Route::post('/simpan_cuti', [App\Http\Controllers\cutiController::class, 'store']);



Route::get('/edit_pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'edit']);
Route::put('/update_pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'update']);
Route::delete('/hapus_pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'destroy']);

Route::get('/edit_jabatan/{id}', [App\Http\Controllers\jabatanController::class, 'edit']);
Route::put('/update_jabatan/{id}', [App\Http\Controllers\jabatanController::class, 'update']);
Route::delete('/hapus_jabatan/{id}', [App\Http\Controllers\jabatanController::class, 'destroy']);

Route::get('/edit_absen/{id}', [App\Http\Controllers\absenController::class, 'edit']);
Route::put('/update_absen/{id}', [App\Http\Controllers\absenController::class, 'update']);
Route::delete('/hapus_absen/{id}', [App\Http\Controllers\absenController::class, 'destroy']);

Route::get('/edit_absen_keluar/{id}', [App\Http\Controllers\absenKeluarController::class, 'edit']);
Route::put('/update_absen_keluar/{id}', [App\Http\Controllers\absenKeluarController::class, 'update']);
Route::delete('/hapus_absen_keluar/{id}', [App\Http\Controllers\absenKeluarController::class, 'destroy']);

Route::get('/edit_cuti/{id}', [App\Http\Controllers\cutiController::class, 'edit']);
Route::put('/update_cuti/{id}', [App\Http\Controllers\cutiController::class, 'update']);
Route::delete('/hapus_cuti/{id}', [App\Http\Controllers\cutiController::class, 'destroy']);

Route::get('/edit_gaji/{id}', [App\Http\Controllers\gajiController::class, 'edit']);
Route::put('/update_gaji/{id}', [App\Http\Controllers\gajiController::class, 'update']);
Route::delete('/hapus_gaji/{id}', [App\Http\Controllers\gajiController::class, 'destroy']);


Route::get('/search_absen', [App\Http\Controllers\absenController::class, 'search']);
Route::get('/search_absen_keluar', [App\Http\Controllers\absenKeluarController::class, 'search']);
Route::get('/search_pegawai', [App\Http\Controllers\pegawaiController::class, 'search']);
Route::get('/search_cuti', [App\Http\Controllers\cutiController::class, 'search']);
Route::get('/search_gaji', [App\Http\Controllers\gajiController::class, 'search']);
Route::get('/search_jabatan', [App\Http\Controllers\jabatanController::class, 'search']);


Route::get('/tampilan_pengguna', function () {
    return view('halaman_user.user_utama');
});

Route::get('/signIn_pengguna',  [App\Http\Controllers\userSignUpController::class, 'showsigninpengguna']);
Route::post('/simpan_usersignIn',  [App\Http\Controllers\userSignUpController::class, 'userSignIn']);
Route::get('/signUp_pengguna', [App\Http\Controllers\userSignUpController::class, 'index']);
Route::post('/simpan_userSignUp', [App\Http\Controllers\userSignUpController::class, 'store']);


Route::get('/absen_pengguna', function () {
    return view('halaman_user.user_absen');
});



Route::get('/tampilan_pengguna', [App\Http\Controllers\tampilanUserController::class, 'tampilan_pengguna'])->name('tampilan_pengguna');
Route::post('/absenusersimpan', [App\Http\Controllers\absenController::class, 'store2']);
Route::post('/absenkeluarusersimpan', [App\Http\Controllers\absenKeluarController::class, 'store2']);
Route::post('/cutiusersimpan', [App\Http\Controllers\cutiController::class, 'store2']);
Route::post('/profilusersimpan', [App\Http\Controllers\PegawaiController::class, 'store2']);


Route::get('/edit_profil/{id}', [App\Http\Controllers\PegawaiController::class, 'edit2']);
Route::put('/update_profil/{id}', [App\Http\Controllers\PegawaiController::class, 'update2']);