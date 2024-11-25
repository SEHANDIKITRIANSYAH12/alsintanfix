@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Edit Perbaikan Alsintan</h1>
    <form action="{{ route('repairs.update', $repair->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_alat" class="form-label">Nama Alat</label>
            <input type="text" name="nama_alat" id="nama_alat" class="form-control" value="{{ $repair->nama_alat }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_perbaikan" class="form-label">Tanggal Perbaikan</label>
            <input type="date" name="tanggal_perbaikan" id="tanggal_perbaikan" class="form-control" value="{{ $repair->tanggal_perbaikan }}" required>
        </div>
        <div class="mb-3">
            <label for="kebutuhan_perbaikan" class="form-label">Kebutuhan Perbaikan</label>
            <input type="text" name="kebutuhan_perbaikan" id="kebutuhan_perbaikan" class="form-control" value="{{ $repair->kebutuhan_perbaikan }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi_perbaikan" class="form-label">Deskripsi Perbaikan</label>
            <textarea name="deskripsi_perbaikan" id="deskripsi_perbaikan" class="form-control">{{ $repair->deskripsi_perbaikan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
