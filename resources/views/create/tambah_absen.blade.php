@extends('layouts.main')

@section('container')
<h2>Input Data</h2>


<form action="/simpan_absen" method="post">
{{ csrf_field() }}
<div class="form-group">
        <label>Nama Pegawai:</label>
        <input type="text" name="nama_pegawai" class="form-control" placeholder="Masukan nama pegawai" required />

    </div>
    <div class="form-group">
        <label>Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" required>
    </div>
    <div class="form-group">
            <label>Waktu Masuk:</label>
            <input type="time" name="waktu_masuk" class="form-control" required />
        </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_absen" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection