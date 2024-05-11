@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Karyawan</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/dashboard/employees/create" class="btn btn-primary mb-3">Tambah Data Karyawan</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Department</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $employee->nama_karyawan }}</td>
                <td>{{ $employee->department->nama }}</td>
                <td>{{ $employee->jabatan->nama }}</td>
                <td>
                    <a href="/dashboard/employees/{{ $employee->no_karyawan }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/employees/{{ $employee->no_karyawan }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/employees/{{ $employee->no_karyawan }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Hapus Data Karyawan?')"><span data-feather="trash"></span></button>
                    </form>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
