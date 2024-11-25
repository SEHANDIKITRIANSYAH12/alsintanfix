@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Tambah Perbaikan Alsintan</h1>
    <form action="{{ route('repairs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_alat" class="form-label">Nama Alat</label>
            <input type="text" name="nama_alat" id="nama_alat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_perbaikan" class="form-label">Tanggal Perbaikan</label>
            <input type="date" name="tanggal_perbaikan" id="tanggal_perbaikan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kebutuhan_perbaikan" class="form-label">Kebutuhan Perbaikan</label>
            <input type="text" name="kebutuhan_perbaikan" id="kebutuhan_perbaikan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi_perbaikan" class="form-label">Deskripsi Perbaikan</label>
            <textarea name="deskripsi_perbaikan" id="deskripsi_perbaikan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
