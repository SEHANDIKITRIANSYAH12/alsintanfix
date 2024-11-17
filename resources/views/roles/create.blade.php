{{-- resources/views/roles/create.blade.php --}}
@extends('layouts.admin')

@section('main-content')
    <h1 class="h3 mb-4 text-gray-800">{{ __('Create Role') }}</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('roles.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection