<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_departemen',
    ];

    // Relasi ke Employee (1 Departemen punya banyak Pegawai)
    public function employees()
    {
        return $this->hasMany(Employee::class, 'departemen_id');
    }
}
