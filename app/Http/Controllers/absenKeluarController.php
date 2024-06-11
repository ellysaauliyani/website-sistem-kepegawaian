<?php

namespace App\Http\Controllers;

use App\Models\AbsenKeluar;
use Illuminate\Http\Request;

class absenKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtabsenkeluar = AbsenKeluar::all();
        return view('pegawai.data_absen_keluar', compact('dtabsenkeluar'));
    }

    public function tampilan_pengguna()
{
    $dtabsenkeluar = AbsenKeluar::all(); // Assuming this retrieves all absen records
    return view('halaman_user.nav', compact('dtabsenkeluar'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_absen_keluar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AbsenKeluar::create([
            'nama_pegawai' => $request->nama_pegawai,
            'tanggal_keluar' => $request->tanggal_keluar,
            'waktu_keluar' => date('Y-m-d') . ' ' . $request->waktu_keluar,

        ]);

        return redirect('/data_absen_keluar')->with('success', 'Data absen berhasil disimpan');
    }

    public function store2(Request $request)
    {
        AbsenKeluar::create([
            'nama_pegawai' => $request->nama_pegawai,
            'tanggal_keluar' => $request->tanggal_keluar,
            'waktu_keluar' => date('Y-m-d') . ' ' . $request->waktu_keluar,

        ]);

        return redirect('/tampilan_pengguna')->with('success', 'Data absen berhasil disimpan');
    }

    public function edit($id)
    {
        $absenkeluar = AbsenKeluar::findOrFail($id);
        return view('edit.edit_absen_keluar', compact('absenkeluar'));
    }

    public function destroy($id)
{
    $absenkeluar = AbsenKeluar::findOrFail($id);
    $absenkeluar->delete();

    return redirect('/data_absen_keluar')->with('success', 'Data absen berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_pegawai' => 'required',
            'tanggal_keluar' => 'required|date',
            'waktu_keluar' => 'required',
        ]);
        
        $waktu_keluar = date('Y-m-d') . ' ' . $validatedData['waktu_keluar'] . ':00';
    
        // Mengupdate data absen dengan data yang divalidasi
        AbsenKeluar::whereId($id)->update([
            'nama_pegawai' => $validatedData['nama_pegawai'],
            'tanggal_keluar' => $validatedData['tanggal_keluar'],
            'waktu_keluar' => $waktu_keluar,
        ]);

        return redirect('/data_absen_keluar')->with('success', 'Data absen berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtabsenkeluar = AbsenKeluar::where('nama_pegawai', 'LIKE', "%$query%")
                    ->orWhere('tanggal_keluar', 'LIKE', "%$query%")
                    ->orWhere('waktu_keluar', 'LIKE', "%$query%")
                    ->get();

    if ($dtabsenkeluar->isEmpty()) {
        return view('pegawai.data_absen_keluar', ['dtabsenkeluar' => $dtabsenkeluar])->with('message', 'No results found.');
    } else {
        return view('pegawai.data_absen_keluar', ['dtabsenkeluar' => $dtabsenkeluar]);
    }
}

}

