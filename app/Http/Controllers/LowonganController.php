<?php

namespace App\Http\Controllers;
use App\Models\Lowongan;

use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index(){
        $lowongan = Lowongan::all();

        return view('lowonganpekerjaan', compact('lowongan'));
    }
}
