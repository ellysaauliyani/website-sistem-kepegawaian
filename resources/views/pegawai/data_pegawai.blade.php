@extends('layouts.main')

@section('container')

<div class="search">
    <form class="form-inline my-2 my-lg-0" method="GET" action="/search_pegawai">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <table class="my-3 table table-bordered">
        <thead>
            <tr class="table-primary">
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Tanggal masuk</th>
            <th>Status</th>
                <th colspan='2'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dtpegawai as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->NIK}}</td>
                <td>{{ $item->nama}}</td>
                <td>{{ $item->jenis_kelamin}}</td>
                <td>{{ $item->jabatan}}</td>
                <td>{{ $item->tanggal_masuk}}</td>
                <td>{{ $item->status}}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="/edit_pegawai/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="/hapus_pegawai/{{ $item->id }}" method="post" style="display: inline;">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data pegawai ini?')">Hapus</button>
    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="/tambah_pegawai" class="btn btn-primary" role="button">Tambah Data</a>

@endsection
