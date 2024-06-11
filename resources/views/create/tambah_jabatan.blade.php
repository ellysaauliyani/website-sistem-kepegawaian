@extends('layouts.main')

@section('container')
<h2>Input Data</h2>

<form action="/simpan_jabatan" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama Jabatan:</label>
        <input type="text" name="nama_jabatan" class="form-control" placeholder="Masukan nama jabatan" required/>
    </div>
    <div class="form-group">
        <label>Gaji Dasar:</label>
        <input type="number" name="gaji_dasar" class="form-control" placeholder="Masukan gaji dasar" required/>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_jabatan" class="btn btn-primary" role="button">Kembali</a>
</form>
@endsection
