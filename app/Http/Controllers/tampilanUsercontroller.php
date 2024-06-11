<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\absen;
use App\Models\AbsenKeluar;
use App\Models\jabatan;
use App\Models\gaji;
use App\Models\pegawai;
use App\Models\cuti;
use Illuminate\Http\Request;

class tampilanUsercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function tampilan_pengguna()
{

    $user = Auth::user();

    // Assuming your 'nama' attribute contains the user's name
    $loggedInUserName = $user->nama;

    $dtabsen = absen::all();
    $dtabsenkeluar = AbsenKeluar::all();
    $jabatan = jabatan::all();
    $gaji = gaji::all();
    $dtpegawai = pegawai::all();
    $dtcuti = cuti::all();

    return view('halaman_user.user_utama', compact('loggedInUserName', 'dtabsen', 'dtabsenkeluar', 'jabatan', 'gaji', 'dtpegawai', 'dtcuti'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
