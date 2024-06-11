@extends('layouts.main')

@section('container')
<div class="search">
    <form class="form-inline my-2 my-lg-0" method="GET" action="/search_gaji">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <tr class="table-danger">
        <br>
    <thead>
    <tr>
   <table class="my-3 table table-bordered">
        <tr class="table-primary">           
        <th>No</th>
        <th>Nama</th>
        <th>Nama Jabatan</th>
        <th>Jumlah uang</th>
        <th>Tanggal pembayaran</th>
        <th colspan='2'>Aksi</th></tr>
    </thead> 
    <tbody>
            @foreach($dtgaji as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nama_jabatan }}</td>
                <td>Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                <td>{{ $item->tanggal_pembayaran }}</td>
                <td>
                    <a href="/edit_gaji/{{ $item->id }}" class="btn btn-sm btn-success">Edit</a>
                    <form action="/hapus_gaji/{{ $item->id }}" method="post" style="display: inline;">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data gaji ini?')">Hapus</button>
    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="/tambah_gaji" class="btn btn-primary" role="button">Tambah Data</a>

@endsection

