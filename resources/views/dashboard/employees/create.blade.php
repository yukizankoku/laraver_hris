@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Karyawan</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/employees" class="mb-5" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="perusahaan" class="form-label">Perusahaan</label>
            <select class="form-select" name="perusahaan_id">
                @foreach ($perusahaans as $perusahaan)
                @if (old('perusahaan_id') == $perusahaan->id)
                <option value="{{ $perusahaan->id }}" selected>{{ $perusahaan->nama }}</option>
                @else
                <option value="{{ $perusahaan->id }}">{{ $perusahaan->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select class="form-select" name="department_id">
                @foreach ($departments as $department)
                @if (old('department_id') == $department->id)
                <option value="{{ $department->id }}" selected>{{ $department->nama }}</option>
                @else
                <option value="{{ $department->id }}">{{ $department->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="no_karyawan" class="form-label">ID Karyawan</label>
            <input type="text" class="form-control @error('no_karyawan') is-invalid @enderror" id="no_karyawan" name="no_karyawan" autofocus required value="{{ old('no_karyawan') }}">
            @error('no_karyawan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan" name="nama_karyawan" required value="{{ old('nama_karyawan') }}">
            @error('nama_karyawan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-select" name="jabatan_id">
                @foreach ($jabatans as $jabatan)
                @if (old('jabatan_id') == $jabatan->id)
                <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama }}</option>
                @else
                <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="golongan" class="form-label">Golongan</label>
            <select class="form-select" name="golongan_id">
                @foreach ($golongans as $golongan)
                @if (old('golongan_id') == $golongan->id)
                <option value="{{ $golongan->id }}" selected>{{ $golongan->nama }}</option>
                @else
                <option value="{{ $golongan->id }}">{{ $golongan->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status_id">
                @foreach ($statuss as $status)
                @if (old('status_id') == $status->id)
                <option value="{{ $status->id }}" selected>{{ $status->nama }}</option>
                @else
                <option value="{{ $status->id }}">{{ $status->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" name="tanggal_masuk" required value="{{ old('tanggal_masuk') }}">
            @error('tanggal_masuk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mulai_kontrak" class="form-label">Tanggal Mulai Kontrak</label>
            <input type="date" class="form-control @error('mulai_kontrak') is-invalid @enderror" id="mulai_kontrak" name="mulai_kontrak" required value="{{ old('mulai_kontrak') }}">
            @error('mulai_kontrak')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="habis_kontrak" class="form-label">Tanggal Habis Kontrak</label>
            <input type="date" class="form-control @error('habis_kontrak') is-invalid @enderror" id="habis_kontrak" name="habis_kontrak" value="{{ old('habis_kontrak') }}">
            @error('habis_kontrak')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tetap" class="form-label">Karyawan Tetap per Tanggal</label>
            <input type="date" class="form-control @error('tetap') is-invalid @enderror" id="tetap" name="tetap" value="{{ old('tetap') }}">
            @error('tetap')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="no_ktp" class="form-label">No. KTP</label>
            <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" name="no_ktp" required value="{{ old('no_ktp') }}">
            @error('no_ktp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="no_npwp" class="form-label">No. NPWP</label>
            <input type="text" class="form-control @error('no_npwp') is-invalid @enderror" id="no_npwp" name="no_npwp" required value="{{ old('no_npwp') }}">
            @error('no_npwp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="no_kk" class="form-label">No. Kartu Keluarga</label>
            <input type="text" class="form-control @error('no_kk') is-invalid @enderror" id="no_kk" name="no_kk" required value="{{ old('no_kk') }}">
            @error('no_kk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="asuransi_bnilife" class="form-label">No. Asuransi BNI Life</label>
            <input type="text" class="form-control @error('asuransi_bnilife') is-invalid @enderror" id="asuransi_bnilife" name="asuransi_bnilife" value="{{ old('asuransi_bnilife') }}">
            @error('asuransi_bnilife')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_ibu_kandung" class="form-label">Nama Ibu Kandung</label>
            <input type="text" class="form-control @error('nama_ibu_kandung') is-invalid @enderror" id="nama_ibu_kandung" name="nama_ibu_kandung" required value="{{ old('nama_ibu_kandung') }}">
            @error('nama_ibu_kandung')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="bpjs_tk" class="form-label">No. BPJS Ketenagakerjaan</label>
            <input type="text" class="form-control @error('bpjs_tk') is-invalid @enderror" id="bpjs_tk" name="bpjs_tk" value="{{ old('bpjs_tk') }}">
            @error('bpjs_tk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="bpjs_kes" class="form-label">No. BPJS Kesehatan</label>
            <input type="text" class="form-control @error('bpjs_kes') is-invalid @enderror" id="bpjs_kes" name="bpjs_kes" value="{{ old('bpjs_kes') }}">
            @error('bpjs_kes')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sim_a" class="form-label">No. SIM A</label>
            <input type="text" class="form-control @error('sim_a') is-invalid @enderror" id="sim_a" name="sim_a" value="{{ old('sim_a') }}">
            @error('sim_a')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sim_b" class="form-label">No. SIM B</label>
            <input type="text" class="form-control @error('sim_b') is-invalid @enderror" id="sim_b" name="sim_b" value="{{ old('sim_b') }}">
            @error('sim_b')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sim_c" class="form-label">No. SIM C</label>
            <input type="text" class="form-control @error('sim_c') is-invalid @enderror" id="sim_c" name="sim_c" value="{{ old('sim_c') }}">
            @error('sim_c')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No. Handphone</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" required value="{{ old('no_hp') }}">
            @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email_kantor" class="form-label">Email Kantor</label>
            <input type="text" class="form-control @error('email_kantor') is-invalid @enderror" id="email_kantor" name="email_kantor" value="{{ old('email_kantor') }}">
            @error('email_kantor')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email_pribadi" class="form-label">Email Pribadi</label>
            <input type="text" class="form-control @error('email_pribadi') is-invalid @enderror" id="email_pribadi" name="email_pribadi" required value="{{ old('email_pribadi') }}">
            @error('email_pribadi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="status_karyawan" class="form-label">Status Karyawan</label>
            <select class="form-select" name="status_karyawan_id">
                @foreach ($status_karyawans as $status_karyawan)
                @if (old('status_karyawan_id') == $status_karyawan->id)
                <option value="{{ $status_karyawan->id }}" selected>{{ $status_karyawan->nama }}</option>
                @else
                <option value="{{ $status_karyawan->id }}">{{ $status_karyawan->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin_id">
                @foreach ($jenis_kelamins as $jenis_kelamin)
                @if (old('jenis_kelamin_id') == $jenis_kelamin->id)
                <option value="{{ $jenis_kelamin->id }}" selected>{{ $jenis_kelamin->nama }}</option>
                @else
                <option value="{{ $jenis_kelamin->id }}">{{ $jenis_kelamin->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="pendidikan" class="form-label">Pendidikan</label>
            <select class="form-select" name="pendidikan_id">
                @foreach ($pendidikans as $pendidikan)
                @if (old('pendidikan_id') == $pendidikan->id)
                <option value="{{ $pendidikan->id }}" selected>{{ $pendidikan->nama }}</option>
                @else
                <option value="{{ $pendidikan->id }}">{{ $pendidikan->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="bidang_kejuruan" class="form-label">Bidang Kejuruan</label>
            <input type="text" class="form-control @error('bidang_kejuruan') is-invalid @enderror" id="bidang_kejuruan" name="bidang_kejuruan" required value="{{ old('bidang_kejuruan') }}">
            @error('bidang_kejuruan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" name="agama_id">
                @foreach ($agamas as $agama)
                @if (old('agama_id') == $agama->id)
                <option value="{{ $agama->id }}" selected>{{ $agama->nama }}</option>
                @else
                <option value="{{ $agama->id }}">{{ $agama->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" required value="{{ old('kota') }}">
            @error('kota')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" required value="{{ old('tanggal_lahir') }}">
            @error('tanggal_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="alamat_ktp" class="form-label">Alamat Sesuai KTP</label>
            <input type="text" class="form-control @error('alamat_ktp') is-invalid @enderror" id="alamat_ktp" name="alamat_ktp" required value="{{ old('alamat_ktp') }}">
            @error('alamat_ktp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="domisili" class="form-label">Alamat Domisili</label>
            <input type="text" class="form-control @error('domisili') is-invalid @enderror" id="domisili" name="domisili" required value="{{ old('domisili') }}">
            @error('domisili')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data Karyawan</button>
    </form>
</div>
@endsection