@extends('dashboard.layouts.main')

@section('container')

<div class="container">
<h1 class="mb-5">{{ $employee->nama_karyawan }}</h1>

<a href="/dashboard/employees" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
<a href="/dashboard/employees/{{ $employee->no_karyawan }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
<form action="/dashboard/employees/{{ $employee->no_karyawan }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Hapus Data Karyawan?')"><span data-feather="trash"></span>Delete</button>
</form>

<form class="col-lg-8">
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Perusahaan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->perusahaan->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Department</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->department->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">ID Karyawan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->no_karyawan }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->nama_karyawan }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Jabatan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->jabatan->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Golongan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->golongan->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Status</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->status->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ date('d/m/Y', strtotime($employee->tanggal_masuk)) }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Tanggal Mulai Kontrak</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ date('d/m/Y', strtotime($employee->mulai_kontrak)) }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Tangga Habis Kontrak</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ date('d/m/Y', strtotime($employee->habis_kontrak)) }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Karyawan Tetap Per Tanggal</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ date('d/m/Y', strtotime($employee->tetap)) }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor KTP</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->no_ktp }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor NPWP</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->no_npwp }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor KK</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->no_kk }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nama Ibu Kandung</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->nama_ibu_kandung }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor Asuransi BNI Life</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->asuransi_bnilife }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor BPJS Ketenagakerjaan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->bpjs_tk }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor BPJS Kesehatan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->bpjs_kes }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor SIM A</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->sim_a }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor SIM B</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->sim_b }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor SIM C</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->sim_c }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Nomor Handphone</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->no_hp }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Email Kantor</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->email_kantor }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Email Pribadi</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->email_pribadi }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Status Karyawan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->status_karyawan->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->jenis_kelamin->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Pendidikan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->pendidikan->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Pendidikan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->pendidikan->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Bidang Kejuruan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->bidang_kejuruan }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Bidang Kejuruan</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->bidang_kejuruan }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Agama</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->agama->nama }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Kota Lahir</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->kota }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ date('d/m/Y', strtotime($employee->tanggal_lahir)) }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Alamat Sesuai KTP</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->alamat_ktp }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Alamat Domisili</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $employee->domisili }}">
    </div>
</form>

@endsection
