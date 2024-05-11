@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Jabatan</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/jabatan" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jabatan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Jabatan</button>
    </form>
</div>
@endsection