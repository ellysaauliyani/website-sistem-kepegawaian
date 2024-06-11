<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gaji;

class gajicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    // Jika terdapat parameter nama dalam request, ambil data gaji berdasarkan nama pegawai
    if ($request->has('nama')) {
        $dtgaji = gaji::where('nama', $request->nama)->get();
    } else {
        // Jika tidak ada parameter nama, ambil semua data gaji
        $dtgaji = gaji::all();
    }

    return view('pegawai.data_gaji', compact('dtgaji'));
}



    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_gaji');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        gaji::create([
            'nama' => $request->nama,
            'nama_jabatan' => $request->nama_jabatan,
            'jumlah' => $request->jumlah,
            'tanggal_pembayaran' => $request->tanggal_pembayaran,


        ]);

        return redirect('/data_gaji')->with('success', 'Data gaji berhasil disimpan');
    }

    public function edit($id)
    {
        $gaji = gaji::findOrFail($id);
        return view('edit.edit_gaji', compact('gaji'));
    }

    public function destroy($id)
{
    $gaji = gaji::findOrFail($id);
    $gaji->delete();

    return redirect('/data_gaji')->with('success', 'Data gaji berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nama_jabatan' => 'required',
            'jumlah' => 'required',
            'tanggal_pembayaran' => 'required|date',
        ]);
        
        gaji::whereId($id)->update([
            'nama' => $validatedData['nama'],
            'nama_jabatan' => $validatedData['nama_jabatan'],
            'jumlah' => $validatedData['jumlah'],
            'tanggal_pembayaran' => $validatedData['tanggal_pembayaran'],
        ]);

        return redirect('/data_gaji')->with('success', 'Data gaji berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtgaji = gaji::where('nama', 'LIKE', "%$query%")
                    ->orWhere('nama_jabatan', 'LIKE', "%$query%")
                    ->orWhere('jumlah', 'LIKE', "%$query%")
                    ->orWhere('tanggal_pembayaran', 'LIKE', "%$query%")
                    ->get();

    if ($dtgaji->isEmpty()) {
        return view('pegawai.data_gaji', ['dtgaji' => $dtgaji])->with('message', 'No results found.');
    } else {
        return view('pegawai.data_gaji', ['dtgaji' => $dtgaji]);
    }
}
}