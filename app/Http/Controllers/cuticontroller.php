<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuti;


class cuticontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtcuti = cuti::all();
        return view('pegawai.data_cuti', compact('dtcuti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_cuti');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        cuti::create([
            'NIK' => $request->NIK,
            'nama' => $request->nama,
            'tgl_pengajuan' =>  $request->tgl_pengajuan,
            'lama_cuti' =>  $request->lama_cuti,
            'tgl_awal' =>  $request->tgl_awal,
            'tgl_akhir' =>  $request->tgl_akhir,
            'keterangan' =>  $request->keterangan,


        ]);

        return redirect('/data_cuti')->with('success', 'Data cuti berhasil disimpan');
    }

    public function store2(Request $request)
    {
        cuti::create([
            'NIK' => $request->NIK,
            'nama' => $request->nama,
            'tgl_pengajuan' =>  $request->tgl_pengajuan,
            'lama_cuti' =>  $request->lama_cuti,
            'tgl_awal' =>  $request->tgl_awal,
            'tgl_akhir' =>  $request->tgl_akhir,
            'keterangan' =>  $request->keterangan,


        ]);

        return redirect('/tampilan_pengguna')->with('success', 'Data cuti berhasil disimpan');
    }

    public function edit($id)
    {
        $cuti = cuti::findOrFail($id);
        return view('edit.edit_cuti', compact('cuti'));
    }

    public function destroy($id)
{
    $cuti = cuti::findOrFail($id);
    $cuti->delete();

    return redirect('/data_cuti')->with('success', 'Data cuti berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NIK' => 'required',
            'nama' => 'required',
            'tgl_pengajuan' => 'required', 
            'lama_cuti' => 'required',
            'tgl_awal' =>  'required',
            'tgl_akhir' =>  'required',
            'keterangan' => 'required',
        ]);

        cuti::whereId($id)->update([
            'NIK' => $validatedData['NIK'],
            'nama' => $validatedData['nama'],
            'tgl_pengajuan' => $validatedData['tgl_pengajuan'],
            'lama_cuti' => $validatedData['lama_cuti'],
            'tgl_awal' =>  $validatedData['tgl_awal'],
            'tgl_akhir' =>  $validatedData['tgl_akhir'],
            'keterangan' => $validatedData['keterangan'],
        ]);

        return redirect('/data_cuti')->with('success', 'Data cuti berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtcuti = cuti::where('NIK', 'LIKE', "%$query%")
                    ->orWhere('nama', 'LIKE', "%$query%")
                    ->orWhere('tgl_pengajuan', 'LIKE', "%$query%")
                    ->orWhere('lama_cuti', 'LIKE', "%$query%")
                    ->orWhere('tgl_awal', 'LIKE', "%$query%")
                    ->orWhere('tgl_akhir', 'LIKE', "%$query%")
                    ->orWhere('keterangan', 'LIKE', "%$query%")
                    ->get();

    if ($dtcuti->isEmpty()) {
        return view('pegawai.data_cuti', ['dtcuti' => $dtcuti])->with('message', 'No results found.');
    } else {
        return view('pegawai.data_cuti', ['dtcuti' => $dtcuti]);
    }
}
}