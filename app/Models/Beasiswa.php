<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $table = 'beasiswa';
    
    protected $fillable = [
        'perusahaan_id',
        'nama_beasiswa',
        'jurusan_dibutuhkan',
        'requirement',
    ];

    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id', 'id_perusahaan');
    }
}
