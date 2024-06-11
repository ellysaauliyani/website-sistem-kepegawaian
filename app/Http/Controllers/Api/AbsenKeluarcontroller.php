<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AbsenKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AbsenKeluarcontroller extends Controller
{
    public function index()
    {
        $data = AbsenKeluar::orderBy('nama_pegawai', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataabsenkeluar = new AbsenKeluar();

        $rules = [
            'nama_pegawai'=>'required',
            'tanggal_keluar'=>'required',
            'waktu_keluar'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $dataabsenkeluar->nama_pegawai = $request->nama_pegawai;
        $dataabsenkeluar->tanggal_keluar = $request->tanggal_keluar;
        $dataabsenkeluar->waktu_keluar = $request->waktu_keluar;


        $post = $dataabsenkeluar->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses menambahkan data',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = AbsenKeluar::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ]);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataabsenkeluar = AbsenKeluar::find($id);
        if(empty($dataabsenkeluar)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama_pegawai'=>'required',
            'tanggal_keluar'=>'required',
            'waktu_keluar'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $dataabsenkeluar->nama_pegawai = $request->nama_pegawai;
        $dataabsenkeluar->tanggal_keluar = $request->tanggal_keluar;
        $dataabsenkeluar->waktu_keluar = $request->waktu_keluar;

        $post = $dataabsenkeluar->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan update data',
        ]);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataabsenkeluar = AbsenKeluar::find($id);
        if(empty($dataabsenkeluar)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $dataabsenkeluar->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}




