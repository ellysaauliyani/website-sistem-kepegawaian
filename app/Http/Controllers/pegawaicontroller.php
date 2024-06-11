<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class pegawaicontroller extends Controller
{
    public function index()
    {
        $dtpegawai = Pegawai::all();
        return view('pegawai.data_pegawai', compact('dtpegawai'));
    }

    

    public function create()
    {
        return view('create.tambah_pegawai');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|unique:pegawai|max:16',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'tanggal_masuk' => 'required|date',
            'status' => 'required',
        ]);

        Pegawai::create($validatedData);

        return redirect('/data_pegawai')->with('success', 'Data pegawai berhasil disimpan');
    }

    public function store2(Request $request)
    {
        pegawai::create([
            'NIK' => $request->NIK,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'tanggal_masuk' => $request->tanggal_masuk,


        ]);

        return redirect('/tampilan_pengguna')->with('success', 'Data pegawai berhasil disimpan');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('edit.edit_pegawai', compact('pegawai'));
    }

    public function edit2($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('halaman_user.edit_profil', compact('pegawai'));
    }

    public function destroy($id)
{
    $pegawai = Pegawai::findOrFail($id);
    $pegawai->delete();

    return redirect('/data_pegawai')->with('success', 'Data pegawai berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|max:16',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'tanggal_masuk' => 'required|date',
            'status' => 'required',
        ]);

        Pegawai::whereId($id)->update($validatedData);

        return redirect('/data_pegawai')->with('success', 'Data pegawai berhasil diperbarui');
    }

    public function update2(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|max:16',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'tanggal_masuk' => 'required|date',
            'status' => 'required',
        ]);

        Pegawai::whereId($id)->update($validatedData);

        return redirect('/tampilan_pengguna')->with('success', 'Profil berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtpegawai = Pegawai::where('NIK', 'LIKE', "%$query%")
                    ->orWhere('nama', 'LIKE', "%$query%")
                    ->orWhere('jenis_kelamin', 'LIKE', "%$query%")
                    ->orWhere('jabatan', 'LIKE', "%$query%")
                    ->orWhere('tanggal_masuk', 'LIKE', "%$query%")
                    ->orWhere('status', 'LIKE', "%$query%")
                    ->get();

    if ($dtpegawai->isEmpty()) {
        return view('pegawai.data_pegawai', ['dtpegawai' => $dtpegawai])->with('message', 'No results found.');
    } else {
        return view('pegawai.data_pegawai', ['dtpegawai' => $dtpegawai]);
    }
}
}