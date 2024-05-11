@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jabatan</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/jabatan/{{ $jabatan->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jabatan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama', $jabatan->nama) }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Jabatan</button>
    </form>
</div>
@endsection