<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'agama_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'golongan_id', 'id');
    }
    
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'id');
    }

    public function jenis_kelamin()
    {
        return $this->belongsTo(JenisKelamin::class, 'jenis_kelamin_id', 'id');
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan_id', 'id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function status_karyawan()
    {
        return $this->belongsTo(StatusKaryawan::class, 'status_karyawan_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'no_karyawan';
    }
}
