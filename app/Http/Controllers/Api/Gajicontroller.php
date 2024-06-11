<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\gaji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Gajicontroller extends Controller
{
    public function index()
    {
        $data = gaji::orderBy('nama', 'asc')->get();
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
        $datagaji = new gaji();

        $rules = [
            'nama'=>'required',
            'nama_jabatan'=>'required',
            'jumlah'=>'required',
            'tanggal_pembayaran'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
            ]);
        }

        $datagaji->nama = $request->nama;
        $datagaji->nama_jabatan = $request->nama_jabatan;
        $datagaji->jumlah = $request->jumlah;
        $datagaji->tanggal_pembayaran = $request->tanggal_pembayaran;


        $post = $datagaji->save();

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
        $data = gaji::find($id);
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
        $datagaji = gaji::find($id);
        if(empty($datagaji)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama'=>'required',
            'nama_jabatan'=>'required',
            'jumlah'=>'required',
            'tanggal_pembayaran'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator-> fails()){
            return response()->json([
            'status' => true,
            'message' => 'Gagal melakukan update data',
            'data' => $validator->errors()
            ]);
        }

        $datagaji->nama = $request->nama;
        $datagaji->nama_jabatan = $request->nama_jabatan;
        $datagaji->jumlah = $request->jumlah;
        $datagaji->tanggal_pembayaran = $request->tanggal_pembayaran;


        $post = $datagaji->save();

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
        $datagaji = gaji::find($id);
        if(empty($datagaji)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $post = $datagaji->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data',
        ]);  
    }
}



