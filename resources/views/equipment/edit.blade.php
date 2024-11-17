@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Edit Data Alsintan</h1>
    <form action="{{ route('equipment.update', $equipment->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="alsintan">Alsintan</label>
            <input type="text" name="alsintan" id="alsintan" class="form-control" value="{{ old('alsintan', $equipment->alsintan) }}" required>
        </div>
        
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $equipment->type) }}">
        </div>
        
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ old('tahun_terbit', $equipment->tahun_terbit) }}">
        </div>
        
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" name="hp" id="hp" class="form-control" value="{{ old('hp', $equipment->hp) }}">
        </div>
        
        <div class="form-group">
            <label for="kondisi_baik">Kondisi Baik</label>
            <input type="number" name="kondisi_baik" id="kondisi_baik" class="form-control" value="{{ old('kondisi_baik', $equipment->kondisi_baik) }}" required>
        </div>
        
        <div class="form-group">
            <label for="kondisi_rusak">Kondisi Rusak</label>
            <input type="number" name="kondisi_rusak" id="kondisi_rusak" class="form-control" value="{{ old('kondisi_rusak', $equipment->kondisi_rusak) }}" required>
        </div>
        
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah', $equipment->jumlah) }}" required>
        </div>
        
        <button type="submit" class="btn btn-warning mt-3">Update</button>
        <a href="{{ route('equipment.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>
</div>
@endsection
