@extends('layouts.main')

@section('container')
<br>
<h2>Edit Data gaji</h2>

<form action="/update_gaji/{{ $gaji->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ $gaji->nama }}" required/>
    </div>
    <div class="form-group">
        <label>Nama jabatan:</label>
        <input type="text" name="nama_jabatan" class="form-control" value="{{ $gaji->nama_jabatan }}" required/>
    </div>
    <div class="form-group">
        <label>Jumlah gaji:</label>
        <input type="number" name="jumlah" class="form-control" value="{{ $gaji->jumlah }}" required/>
    </div>
    <div class="form-group">
        <label>Tanggal pembayaran:</label>
        <input type="date" name="tanggal_pembayaran" class="form-control" value="{{ $gaji->tanggal_pembayaran }}" required/>
    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_gaji" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection

