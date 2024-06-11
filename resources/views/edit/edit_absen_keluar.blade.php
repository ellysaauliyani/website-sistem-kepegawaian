@extends('layouts.main')

@section('container')
<br>
<h2>Edit Data absen</h2>

<form action="/update_absen_keluar/{{ $absenkeluar->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>Nama Pegawai:</label>
        <input type="text" name="nama_pegawai" class="form-control" value="{{ $absenkeluar->nama_pegawai }}" required/>
    </div>
    <div class="form-group">
        <label>Tanggal:</label>
        <input type="date" name="tanggal_keluar" class="form-control" value="{{ $absenkeluar->tanggal }}" required/>
    </div>
    <div class="form-group">
        <label>Waktu Keluar:</label>
        <input type="time" name="waktu_keluar" class="form-control" value="{{ \Carbon\Carbon::parse($absenkeluar->waktu_keluar)->format('H:i') }}" required/>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_absen_keluar" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection
