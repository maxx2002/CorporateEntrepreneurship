<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $fillable = [
        'perusahaan_id',
        'nama_lowongan',
        'jurusan_dibutuhkan',
        'bentuk_pekerjaan',
        'job_desk',
        'requirement',
    ];

    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id', 'id');
    }
}
