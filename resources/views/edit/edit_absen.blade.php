@extends('layouts.main')

@section('container')
<br>
<h2>Edit Data absen</h2>

<form action="/update_absen/{{ $absen->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>Nama Pegawai:</label>
        <input type="text" name="nama_pegawai" class="form-control" value="{{ $absen->nama_pegawai }}" required/>
    </div>
    <div class="form-group">
        <label>Tanggal:</label>
        <input type="date" name="tanggal" class="form-control" value="{{ $absen->tanggal }}" required/>
    </div>
    <div class="form-group">
        <label>Waktu Masuk:</label>
        <input type="time" name="waktu_masuk" class="form-control" value="{{ \Carbon\Carbon::parse($absen->waktu_masuk)->format('H:i') }}" required/>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_absen" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection
