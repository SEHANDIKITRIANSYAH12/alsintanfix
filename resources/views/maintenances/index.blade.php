@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Data Pemeliharaan Alat</h1>
    <a href="{{ route('maintenances.create') }}" class="btn btn-primary mb-3">Tambah Jadwal Pemeliharaan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Alat (Alsintan)</th>
                <th>Tanggal Pemeliharaan</th>
                <th>Deskripsi Kerusakan</th>
                <th>Biaya Perbaikan</th>
                <th>Durasi (Hari)</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($maintenances as $maintenance)
            <tr>
                <td>{{ $maintenance->equipment->alsintan ?? 'Data tidak tersedia' }}</td>
                <td>{{ \Carbon\Carbon::parse($maintenance->maintenance_date)->format('d M Y') }}</td>
                <td>{{ $maintenance->description }}</td>
                <td>Rp {{ number_format($maintenance->cost, 0, ',', '.') }}</td>
                <td>{{ $maintenance->duration }} hari</td>
                <td>
                    @if ($maintenance->status == 'fixed')
                        <span class="badge bg-success">Selesai</span>
                    @else
                        <span class="badge bg-warning">Dalam Pemeliharaan</span>
                    @endif
                </td>
                <td>
                    <form action="{{ route('maintenances.fixed', $maintenance->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success btn-sm">Selesai</button>
                    </form>
                    <a href="{{ route('maintenances.edit', $maintenance->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('maintenances.destroy', $maintenance->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada data pemeliharaan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $maintenances->links() }}
</div>
@endsection
