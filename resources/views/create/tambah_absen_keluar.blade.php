@extends('layouts.main')

@section('container')
<h2>Input Data</h2>


<form action="/simpan_absen_keluar" method="post">
{{ csrf_field() }}
<div class="form-group">
        <label>Nama Pegawai:</label>
        <input type="text" name="nama_pegawai" class="form-control" placeholder="Masukan nama pegawai" required />

    </div>
    <div class="form-group">
        <label>Tanggal:</label>
        <input type="date" id="tanggal_keluar" name="tanggal_keluar" class="form-control" required>
    </div>
    <div class="form-group">
            <label>Waktu Keluar:</label>
            <input type="time" name="waktu_keluar" class="form-control" required />
        </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_absen_keluar" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection