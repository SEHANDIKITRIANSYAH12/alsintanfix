@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Edit Alat & Bahan</h1>
    <form action="{{ route('materials.update', $material->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Alat/Bahan</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $material->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-control" required>
                <option value="pinjam_habis" {{ $material->kategori == 'pinjam_habis' ? 'selected' : '' }}>Pinjam Habis</option>
                <option value="pinjam_pakai" {{ $material->kategori == 'pinjam_pakai' ? 'selected' : '' }}>Pinjam Pakai</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $material->jumlah }}" required min="1">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ $material->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
