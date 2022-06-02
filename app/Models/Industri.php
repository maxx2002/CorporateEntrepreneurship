<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    use HasFactory;

    protected $table = 'industri';

    protected $fillable = [
        'perusahaan_id',
        'nama_industri',
    ];

    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id', 'id_perusahaan');
    }
}
