@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Data Alat & Bahan</h1>
    <a href="{{ route('materials.create') }}" class="btn btn-primary mb-3">Tambah Alat & Bahan</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materials as $key => $material)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $material->nama }}</td>
                    <td>{{ $material->kategori == 'pinjam_habis' ? 'Pinjam Habis' : 'Pinjam Pakai' }}</td>
                    <td>{{ $material->jumlah }}</td>
                    <td>{{ $material->keterangan }}</td>
                    <td>
                        <a href="{{ route('materials.edit', $material->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('materials.destroy', $material->id) }}" method="POST" style="display: inline;">
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
