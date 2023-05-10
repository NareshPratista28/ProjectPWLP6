<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent
use App\Models\Kelas;

class Mahasiswa extends Model 
{
    protected $table = "mahasiswas";
    public $timestamps = false;
    protected $primaryKey = 'Nim'; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nim',
        'Nama',
        'featured_image',
        'Tanggal_Lahir',
        'kelas_id',
        'Jurusan',
        'No_Handphone',
        'Email',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function mahasiswa_matakuliah () {
        return $this->hasMany(Mahasiswa_Matakuliah::class);
    }
}
