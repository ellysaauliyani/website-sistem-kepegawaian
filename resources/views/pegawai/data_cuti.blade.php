@extends('layouts.main')

@section('container')
<div class="search">
    <form class="form-inline my-2 my-lg-0" method="GET" action="/search_cuti">
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
        <th>NIK</th>
        <th>Nama</th>
        <th>Tanggal Pengajuan</th>
        <th>Lama Cuti</th>
        <th>Tanggal Awal Cuti</th>
        <th>Tanggal AKhir Cuti</th>
        <th>Keterangan</th>
        <th colspan='2'>Aksi</th>
    </tr>
    </thead> 
    <tbody>
            @foreach($dtcuti as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->NIK }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tgl_pengajuan }}</td>
                <td>{{ $item->lama_cuti }} </td>
                <td>{{ $item->tgl_awal }}</td>
                <td>{{ $item->tgl_akhir }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="/edit_cuti/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="/hapus_cuti/{{ $item->id }}" method="post" style="display: inline;">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data cuti ini?')">Hapus</button>
    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="/tambah_cuti" class="btn btn-primary" role="button">Tambah Data</a>

@endsection

