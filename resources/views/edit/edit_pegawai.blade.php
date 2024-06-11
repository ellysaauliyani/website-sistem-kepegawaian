@extends('layouts.main')

@section('container')
<br>
<h2>Edit Data Pegawai</h2>

<form action="/update_pegawai/{{ $pegawai->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>NIK:</label>
        <input type="text" name="NIK" class="form-control" value="{{ $pegawai->NIK }}" required/>
    </div>
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ $pegawai->nama }}" required/>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" required {{ $pegawai->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
            <label class="form-check-label" for="laki_laki">Laki-laki</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required {{ $pegawai->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
            <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        <label>Jabatan:</label>
        <input type="text" name="jabatan" class="form-control" value="{{ $pegawai->jabatan }}" required/>
    </div>
    <div class="form-group">
        <label for="tanggal_masuk">Tanggal Masuk:</label>
        <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" value="{{ $pegawai->tanggal_masuk }}" required>
    </div>
    <div class="form-group">
        <label>Status:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="Aktif" value="Aktif" required {{ $pegawai->status == 'Aktif' ? 'checked' : '' }}>
            <label class="form-check-label" for="aktif">Aktif</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="Tidak Aktif" value="Tidak Aktif" required {{ $pegawai->status == 'Tidak Aktif' ? 'checked' : '' }}>
            <label class="form-check-label" for="Tidak Aktif">Tidak Aktif</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_pegawai" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection
