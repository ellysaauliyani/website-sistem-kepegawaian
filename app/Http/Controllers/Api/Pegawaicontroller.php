<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pegawai;
use Illuminate\Support\Facades\Validator;

class Pegawaicontroller extends Controller
{
    public function index()
    {
        $data = pegawai::orderBy('nama', 'asc')->get();
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
        $datapegawai = new pegawai();

        $rules = [
            'NIK'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'jabatan'=>'required',
            'tanggal_masuk'=>'required',
            'status'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $datapegawai->NIK = $request->NIK;
        $datapegawai->nama = $request->nama;
        $datapegawai->jenis_kelamin = $request->jenis_kelamin;
        $datapegawai->jabatan = $request->jabatan;
        $datapegawai->tanggal_masuk = $request->tanggal_masuk;
        $datapegawai->status = $request->status;


        $post = $datapegawai->save();

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
        $data = pegawai::find($id);
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
        $datapegawai = pegawai::find($id);
        if(empty($datapegawai)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'NIK'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'jabatan'=>'required',
            'tanggal_masuk'=>'required',
            'status'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $datapegawai->NIK = $request->NIK;
        $datapegawai->nama = $request->nama;
        $datapegawai->jenis_kelamin = $request->jenis_kelamin;
        $datapegawai->jabatan = $request->jabatan;
        $datapegawai->tanggal_masuk = $request->tanggal_masuk;
        $datapegawai->status = $request->status;


        $post = $datapegawai->save();

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
        $datapegawai = pegawai::find($id);
        if(empty($datapegawai)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $datapegawai->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}




