<!-- resources/views/usages/confirm.blade.php -->

@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h2>Konfirmasi Penggunaan Alsintan</h2>

    <p><strong>Alsintan:</strong> {{ $usage->equipment->name }}</p>
    <p><strong>Petani:</strong> {{ $usage->farmer->name }}</p>
    <p><strong>Tanggal Penggunaan:</strong> {{ $usage->usage_date }}</p>
    <p><strong>Durasi:</strong> {{ $usage->duration }} jam</p>
    <p><strong>Luas Area:</strong> {{ $usage->area }} hektar</p>
    <p><strong>Hasil:</strong> {{ $usage->result }}</p>

    <!-- Form untuk konfirmasi penggunaan -->
    <form action="{{ route('usages.update', $usage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="confirmed" {{ $usage->status == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Konfirmasi Penggunaan</button>
    </form>
</div>
@endsection
