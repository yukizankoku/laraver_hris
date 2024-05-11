<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKaryawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function statusKaryawan()
    {
        return $this->hasMany(Employee::class, 'status_karyawan_id', 'id');
    }
}
