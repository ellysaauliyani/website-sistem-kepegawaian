@extends('layouts.main')

@section('container')
<h2>Input Data</h2>


<form action="/simpan_gaji" method="post">
{{ csrf_field() }}
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan nama" required/>
    </div>
    <div class="form-group">
        <label>Nama Jabatan:</label>
        <input type="text" name="nama_jabatan" class="form-control" placeholder="Masukan nama jabatan" required/>
    </div>
    <div class="form-group">
        <label>Jumlah gaji:</label>
        <input type="number" name="jumlah" class="form-control" placeholder="Masukan jumlah gaji" required/>
    </div>
    <div class="form-group">
        <label>Tanggal pembayaran:</label>
        <input type="date" class="tanggal" name="tanggal_pembayaran" required/>
    </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_gaji" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection