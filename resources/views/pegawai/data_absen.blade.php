@extends('layouts.main')

@section('container')

<div class="search">
    <form class="form-inline my-2 my-lg-0" method="GET" action="/search_absen">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <table class="my-3 table table-bordered">
        <thead>
            <tr class="table-primary">
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Waktu Masuk</th>
                <th colspan='2'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dtabsen as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_pegawai }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->waktu_masuk }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="/edit_absen/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="/hapus_absen/{{ $item->id }}" method="post" style="display: inline;">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data absen ini?')">Hapus</button>
    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="/tambah_absen" class="btn btn-primary" role="button">Tambah Data</a>

@endsection
