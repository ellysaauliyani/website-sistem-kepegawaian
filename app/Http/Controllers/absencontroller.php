<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absen;

class absencontroller extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtabsen = absen::all();
        return view('pegawai.data_absen', compact('dtabsen'));
    }

    public function tampilan_pengguna()
{
    $dtabsen = absen::all(); // Assuming this retrieves all absen records
    return view('halaman_user.nav', compact('dtabsen'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_absen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        absen::create([
            'nama_pegawai' => $request->nama_pegawai,
            'tanggal' => $request->tanggal,
            'waktu_masuk' => date('Y-m-d') . ' ' . $request->waktu_masuk,

        ]);

        return redirect('/data_absen')->with('success', 'Data absen berhasil disimpan');
    }

    public function store2(Request $request)
    {
        absen::create([
            'nama_pegawai' => $request->nama_pegawai,
            'tanggal' => $request->tanggal,
            'waktu_masuk' => date('Y-m-d') . ' ' . $request->waktu_masuk,

        ]);

        return redirect('/tampilan_pengguna')->with('success', 'Data absen berhasil disimpan');
    }

    public function edit($id)
    {
        $absen = absen::findOrFail($id);
        return view('edit.edit_absen', compact('absen'));
    }

    public function destroy($id)
{
    $absen = absen::findOrFail($id);
    $absen->delete();

    return redirect('/data_absen')->with('success', 'Data absen berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_pegawai' => 'required',
            'tanggal' => 'required|date',
            'waktu_masuk' => 'required',
        ]);
        
        $waktu_masuk = date('Y-m-d') . ' ' . $validatedData['waktu_masuk'] . ':00';
    
        // Mengupdate data absen dengan data yang divalidasi
        absen::whereId($id)->update([
            'nama_pegawai' => $validatedData['nama_pegawai'],
            'tanggal' => $validatedData['tanggal'],
            'waktu_masuk' => $waktu_masuk,
        ]);

        return redirect('/data_absen')->with('success', 'Data absen berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtabsen = Absen::where('nama_pegawai', 'LIKE', "%$query%")
                    ->orWhere('tanggal', 'LIKE', "%$query%")
                    ->orWhere('waktu_masuk', 'LIKE', "%$query%")
                    ->get();

    if ($dtabsen->isEmpty()) {
        return view('pegawai.data_absen', ['dtabsen' => $dtabsen])->with('message', 'No results found.');
    } else {
        return view('pegawai.data_absen', ['dtabsen' => $dtabsen]);
    }
}

}

