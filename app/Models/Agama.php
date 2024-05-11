<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function agama()
    {
        return $this->hasMany(Employee::class, 'agama_id', 'id');
    }
}
