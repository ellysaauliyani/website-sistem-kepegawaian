<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jabatan;

class jabatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtjabatan = jabatan::all();
        return view('pegawai.data_jabatan', compact('dtjabatan'));
    }

    public function tampilan_pengguna()
{
    $jabatan = jabatan::all();
    return view('halaman_user.nav', compact('jabatan'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_jabatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        jabatan::create([
            'nama_jabatan' => $request->nama_jabatan,
            'gaji_dasar' => $request->gaji_dasar
        ]);

        return redirect('/data_jabatan')->with('success', 'Data jabatan berhasil disimpan');
    }

    public function edit($id)
    {
        $jabatan = jabatan::findOrFail($id);
        return view('edit.edit_jabatan', compact('jabatan'));
    }

    public function destroy($id)
{
    $jabatan = jabatan::findOrFail($id);
    $jabatan->delete();

    return redirect('/data_jabatan')->with('success', 'Data jabatan berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_jabatan' => 'required',
            'gaji_dasar' => 'required|numeric',
        ]);

        jabatan::whereId($id)->update($validatedData);

        return redirect('/data_jabatan')->with('success', 'Data jabatan berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtjabatan = jabatan::where('nama_jabatan', 'LIKE', "%$query%")
                    ->orWhere('gaji_dasar', 'LIKE', "%$query%")
                    ->get();

    if ($dtjabatan->isEmpty()) {
        return view('pegawai.data_jabatan', ['dtjabatan' => $dtjabatan])->with('message', 'No results found.');
    } else {
        return view('pegawai.data_jabatan', ['dtjabatan' => $dtjabatan]);
    }
}

}