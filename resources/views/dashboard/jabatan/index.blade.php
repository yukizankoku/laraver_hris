@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Department</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-6">
    <a href="/dashboard/jabatan/create" class="btn btn-primary mb-3">+ Jabatan Baru</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Departement</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jabatans as $jabatan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jabatan->nama }}</td>
                <td>
                    <a href="/dashboard/jabatan/{{ $jabatan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/jabatan/{{ $jabatan->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Hapus Jabatan?')"><span data-feather="trash"></span></button>
                    </form>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
