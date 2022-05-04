<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';

    protected $fillable = [
        'nama_perusahaan',
        'logo_path',
        'deskripsi_singkat',
        'visi_misi',
        'website_resmi',
    ];

    public function lowongan(){
        return $this->hasMany(Lowongan::class, 'perusahaan_id', 'id');
    }
}
