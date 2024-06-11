@extends('layouts.main')

@section('container')
<h2>Input Data</h2>


<form action="/simpan_cuti" method="post">
{{ csrf_field() }}
    <div class="form-group">
        <label>NIK:</label>
        <input type="text" name="NIK" class="form-control" placeholder="Masukan NIK" required />

    </div>
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan nama" required/>
    </div>
    
    <div class="form-group">
        <label>Tanggal pengajuan:</label>
        <input type="date" class="tgl_pengajuan" name="tgl_pengajuan" required/>
    </div>

    <div class="form-group">
        <label>Lama cuti:</label>
        <input type="text" name="lama_cuti" class="form-control" placeholder="Masukan lama cuti" required/>
    </div>

    <div class="form-group">
        <label>Tanggal awal cuti:</label>
        <input type="date" class="tgl_awal" name="tgl_awal" required/>
    </div>

    <div class="form-group">
        <label>Tanggal akhir cuti:</label>
        <input type="date" class="tgl_akhir" name="tgl_akhir" required/>
    </div>

   <div class="form-group">
        <label>Keterangan:</label>
        <input type="text" name="keterangan" class="form-control" placeholder="Masukan keterangan" required/>
    </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_cuti" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection