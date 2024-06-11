<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Cuticontroller extends Controller
{
    public function index()
    {
        $data = cuti::orderBy('nama', 'asc')->get();
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
        $datacuti = new cuti();

        $rules = [
            'NIK'=>'required',
            'nama'=>'required',
            'tgl_pengajuan'=>'required',
            'lama_cuti'=>'required',
            'tgl_awal'=>'required',
            'tgl_akhir'=>'required',
            'keterangan'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $datacuti->NIK = $request->NIK;
        $datacuti->nama = $request->nama;
        $datacuti->tgl_pengajuan = $request->tgl_pengajuan;
        $datacuti->lama_cuti = $request->lama_cuti;
        $datacuti->tgl_awal = $request->tgl_awal;
        $datacuti->tgl_akhir = $request->tgl_akhir;
        $datacuti->keterangan = $request->keterangan;


        $post = $datacuti->save();

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
        $data = cuti::find($id);
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
        $datacuti = cuti::find($id);
        if(empty($datacuti)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'NIK'=>'required',
            'nama'=>'required',
            'tgl_pengajuan'=>'required',
            'lama_cuti'=>'required',
            'tgl_awal'=>'required',
            'tgl_akhir'=>'required',
            'keterangan'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $datacuti->NIK = $request->NIK;
        $datacuti->nama = $request->nama;
        $datacuti->tgl_pengajuan = $request->tgl_pengajuan;
        $datacuti->lama_cuti = $request->lama_cuti;
        $datacuti->tgl_awal = $request->tgl_awal;
        $datacuti->tgl_akhir = $request->tgl_akhir;
        $datacuti->keterangan = $request->keterangan;

        $post = $datacuti->save();

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
        $datacuti = cuti::find($id);
        if(empty($datacuti)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $datacuti->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}



