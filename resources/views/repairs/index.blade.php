@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Daftar Perbaikan Alsintan</h1>
    <a href="{{ route('repairs.create') }}" class="btn btn-primary mb-3">Tambah Perbaikan</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Tanggal Perbaikan</th>
                <th>Kebutuhan Perbaikan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($repairs as $key => $repair)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $repair->nama_alat }}</td>
                    <td>{{ $repair->tanggal_perbaikan }}</td>
                    <td>{{ $repair->kebutuhan_perbaikan }}</td>
                    <td>{{ $repair->deskripsi_perbaikan }}</td>
                    <td>
                        <a href="{{ route('repairs.edit', $repair->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('repairs.destroy', $repair->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
