@extends('layouts.main')

@section('container')
<br>
<h2>Edit Data jabatan</h2>

<form action="/update_jabatan/{{ $jabatan->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>Nama jabatan:</label>
        <input type="text" name="nama_jabatan" class="form-control" value="{{ $jabatan->nama_jabatan }}" required/>
    </div>
    <div class="form-group">
        <label>Gaji Dasar:</label>
        <input type="number" name="gaji_dasar" class="form-control" value="{{ $jabatan->gaji_dasar }}" required/>
    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_jabatan" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection
