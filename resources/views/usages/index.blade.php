<!-- resources/views/usages/index.blade.php -->

@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h2>Daftar Penggunaan Alsintan</h2>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Alsintan</th>
                <th>Petani</th>
                <th>Tanggal Penggunaan</th>
                <th>Durasi</th>
                <th>Luas Area</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usages as $usage)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $usage->equipment->name }}</td>
                    <td>{{ $usage->farmer->name }}</td>
                    <td>{{ $usage->usage_date }}</td>
                    <td>{{ $usage->duration }} jam</td>
                    <td>{{ $usage->area }} hektar</td>
                    <td>{{ ucfirst($usage->status) }}</td>
                    <td>
                        @if ($usage->status == 'pending')
                            <a href="{{ route('usages.confirm', $usage->id) }}" class="btn btn-success">Konfirmasi</a>
                        @else
                            <span class="text-muted">Sudah dikonfirmasi</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    {{ $usages->links() }}
</div>
@endsection
