<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Lowongan;
use App\Models\Beasiswa;

class PerusahaanController extends Controller
{
    public function index(){
        $perusahaan = Perusahaan::orderBy('nama_perusahaan', 'ASC')->get();

        return view('companylist', compact('perusahaan'));
    }

    public function company($id){
        $perusahaan = Perusahaan::where('id_perusahaan', $id)->first();
        $lowongan = Lowongan::where('perusahaan_id', $id)->get();
        $beasiswa = Beasiswa::where('perusahaan_id', $id)->get();

        return view('companydetail', compact('perusahaan', 'lowongan', 'beasiswa'));
    }
}
