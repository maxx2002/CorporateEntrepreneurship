<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Lowongan;

class PerusahaanController extends Controller
{
    public function index(){
        $perusahaan = Perusahaan::all();

        return view('companylist', compact('perusahaan'));
    }

    public function company($id){
        $perusahaan = Perusahaan::where('id_perusahaan', $id)->first();
        $lowongan = Lowongan::where('perusahaan_id', $id)->get();

        return view('companydetail', compact('perusahaan', 'lowongan'));
    }
}
