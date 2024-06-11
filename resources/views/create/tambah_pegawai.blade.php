@extends('layouts.main')

@section('container')
<br>
<h2>Input Data</h2>

<form action="/simpan_pegawai" method="post">
{{ csrf_field() }}
    <div class="form-group">
        <label>NIK:</label>
        <input type="text" name="NIK" class="form-control" placeholder="Masukan NIK" required/>
    </div>
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" required>
            <label class="form-check-label" for="laki_laki">Laki-laki</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
            <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        <label>Jabatan:</label>
        <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" required/>
    </div>
    <div class="form-group">
        <label for="tanggal_masuk">Tanggal Masuk:</label>
        <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Status:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="aktif" value="aktif" required>
            <label class="form-check-label" for="aktif">Aktif</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="tidak_aktif" value="tidak_aktif" required>
            <label class="form-check-label" for="tidak_aktif">Tidak Aktif</label>
        </div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_pegawai" class="btn btn-primary" role="button">Kembali</a>
</form>
@endsection
