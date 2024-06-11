<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Absencontroller extends Controller
{
    public function index()
    {
        $data = absen::orderBy('nama_pegawai', 'asc')->get();
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
        $dataabsen = new absen();

        $rules = [
            'nama_pegawai'=>'required',
            'tanggal'=>'required',
            'waktu_masuk'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $dataabsen->nama_pegawai = $request->nama_pegawai;
        $dataabsen->tanggal = $request->tanggal;
        $dataabsen->waktu_masuk = $request->waktu_masuk;


        $post = $dataabsen->save();

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
        $data = absen::find($id);
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
        $dataabsen = absen::find($id);
        if(empty($dataabsen)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama_pegawai'=>'required',
            'tanggal'=>'required',
            'waktu_masuk'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $dataabsen->nama_pegawai = $request->nama_pegawai;
        $dataabsen->tanggal = $request->tanggal;
        $dataabsen->waktu_masuk = $request->waktu_masuk;

        $post = $dataabsen->save();

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
        $dataabsen = absen::find($id);
        if(empty($dataabsen)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $dataabsen->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}



