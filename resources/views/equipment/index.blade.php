@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Ringkasan Data Alsintan</h1>
    <a href="{{ route('equipment.create') }}" class="btn btn-primary mb-3">Tambah Data Alsintan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Alsintan</th>
                <th>Type</th>
                <th>Tahun Terbit</th>
                <th>HP</th>
                <th>Kondisi Baik</th>
                <th>Kondisi Rusak</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipment as $item)
            <tr>
                <td>{{ $item->alsintan }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->kondisi_baik }}</td>
                <td>{{ $item->kondisi_rusak }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>
                    <a href="{{ route('equipment.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('equipment.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
