@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Tambah Data Alsintan</h1>
    <form action="{{ route('equipment.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="alsintan">Alsintan</label>
            <input type="text" name="alsintan" id="alsintan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control">
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control">
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" name="hp" id="hp" class="form-control">
        </div>
        <div class="form-group">
            <label for="kondisi_baik">Kondisi Baik</label>
            <input type="number" name="kondisi_baik" id="kondisi_baik" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kondisi_rusak">Kondisi Rusak</label>
            <input type="number" name="kondisi_rusak" id="kondisi_rusak" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Simpan</button>
        <a href="{{ route('equipment.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>
</div>
@endsection
