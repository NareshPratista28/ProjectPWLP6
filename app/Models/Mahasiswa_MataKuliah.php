<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa_matakuliah';
    protected $fillable = [
        'mahasiswa_id',
        'matakuliah_id',
        'nilai'
    ];

    public function mahasiswas()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }

}
