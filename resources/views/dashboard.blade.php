@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Selamat datang!</h1>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card" style="background-color: #02872a;">
      <div class="card-body">
        <h5 class="card-title">Pegawai</h5>
        <p class="card-text">Jumlah pegawai</p>
        <a href="/data_pegawai" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="card" style="background-color: #dfbd87;">
      <div class="card-body">
        <h5 class="card-title">Absen Masuk</h5>
        <p class="card-text">Jumlah absen masuk</p>
        <a href="/data_absen" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card" style="background-color: #dfbd87;">
      <div class="card-body">
        <h5 class="card-title">Absen Keluar</h5>
        <p class="card-text">Jumlah absen keluar</p>
        <a href="/data_absen_keluar" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="card" style="background-color: #c71902;">
      <div class="card-body">
        <h5 class="card-title">Gaji</h5>
        <p class="card-text">Jumlah gaji</p>
        <a href="/data_gaji" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
  <div class="card" style="background-color: #f80bcc;">
      <div class="card-body">
        <h5 class="card-title">Jabatan</h5>
        <p class="card-text">Jumlah jabatan</p>
        <a href="/data_jabatan" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
  <div class="card" style="background-color: #f7ef08;">
      <div class="card-body">
        <h5 class="card-title">Cuti</h5>
        <p class="card-text">Jumlah Cuti</p>
        <a href="/data_cuti" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>

</div>
@endsection
