@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Edit Jadwal Pemeliharaan</h1>
    <a href="{{ route('maintenances.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    
    <!-- Form Edit Pemeliharaan -->
    <form action="{{ route('maintenances.update', $maintenance->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Pilihan Alsintan -->
        <div class="mb-3">
            <label for="equipment_id" class="form-label">Nama Alsintan</label>
            <select class="form-control @error('equipment_id') is-invalid @enderror" id="equipment_id" name="equipment_id" required>
                <option value="">-- Pilih Alsintan --</option>
                @foreach($equipment as $item)
                    <option value="{{ $item->id }}" 
                        {{ $maintenance->equipment_id == $item->id ? 'selected' : '' }}>
                        {{ $item->alsintan }} - {{ $item->type }}
                    </option>
                @endforeach
            </select>
            @error('equipment_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Deskripsi Kerusakan -->
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Kerusakan</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', $maintenance->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tanggal Pemeliharaan -->
        <div class="mb-3">
            <label for="maintenance_date" class="form-label">Tanggal Pemeliharaan</label>
            <input type="date" class="form-control @error('maintenance_date') is-invalid @enderror" id="maintenance_date" name="maintenance_date" value="{{ old('maintenance_date', $maintenance->maintenance_date) }}" required>
            @error('maintenance_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Biaya Perbaikan -->
        <div class="mb-3">
            <label for="cost" class="form-label">Biaya Perbaikan (Rp)</label>
            <input type="number" class="form-control @error('cost') is-invalid @enderror" id="cost" name="cost" value="{{ old('cost', $maintenance->cost) }}" placeholder="Contoh: 500000">
            @error('cost')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Durasi Perbaikan -->
        <div class="mb-3">
            <label for="duration" class="form-label">Durasi Perbaikan (Hari)</label>
            <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration', $maintenance->duration) }}" placeholder="Contoh: 2">
            @error('duration')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Jadwal Pemeliharaan</button>
    </form>
</div>
@endsection
