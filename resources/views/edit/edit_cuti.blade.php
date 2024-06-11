@extends('layouts.main')

@section('container')
<br>
<h2>Edit Data cuti</h2>

<form action="/update_cuti/{{ $cuti->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>NIK:</label>
        <input type="text" name="NIK" class="form-control" value="{{ $cuti->NIK }}" required/>
    </div>
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ $cuti->nama }}" required/>
    </div>
    <div class="form-group">
        <label>Tanggal pengajuan:</label>
        <input type="date" name="tgl_pengajuan" class="form-control" value="{{ $cuti->tgl_pengajuan }}" required/>
    </div>
    <div class="form-group">
        <label>Lama Cuti:</label>
        <input type="text" name="lama_cuti" class="form-control" value="{{ $cuti->lama_cuti }}" required/>
    </div>
    <div class="form-group">
        <label>Tanggal awal cuti:</label>
        <input type="date" name="tgl_awal" class="form-control" value="{{ $cuti->tgl_awal }}" required/>
    </div>
    <div class="form-group">
        <label>Tanggal akhir cuti:</label>
        <input type="date" name="tgl_akhir" class="form-control" value="{{ $cuti->tgl_akhir }}" required/>
    </div>
    <div class="form-group">
        <label> Keterangan:</label>
        <input type="text" name="keterangan" class="form-control" value="{{ $cuti->keterangan}}" required/>
    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_cuti" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection
