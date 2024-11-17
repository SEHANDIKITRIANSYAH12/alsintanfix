<!-- resources/views/usages/create.blade.php -->

@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h2>Pemesanan Alsintan</h2>

    <!-- Form Pemesanan Alsintan -->
    <form action="{{ route('usages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="equipment_id">Pilih Alsintan</label>
            <select name="equipment_id" id="equipment_id" class="form-control">
                @foreach ($equipment as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="farmer_id">Pilih Petani</label>
            <select name="farmer_id" id="farmer_id" class="form-control">
                @foreach ($farmers as $farmer)
                    <option value="{{ $farmer->id }}">{{ $farmer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="usage_date">Tanggal Penggunaan</label>
            <input type="date" name="usage_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="duration">Durasi (jam)</label>
            <input type="number" name="duration" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="area">Luas Area (hektar)</label>
            <input type="number" name="area" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="result">Hasil</label>
            <textarea name="result" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pemesanan</button>
    </form>
</div>
@endsection
