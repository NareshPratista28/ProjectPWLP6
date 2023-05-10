<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class MataKuliah extends Model
{
    protected $table = 'matakuliah';

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswas_matakuliah', 'mahasiswa_id', 'matakuliah_id');
    }

    public function mahasiswa_matakuliah () {
        return $this->hasMany(Mahasiswa_Matakuliah::class);
    }
}