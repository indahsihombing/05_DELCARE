<?php

namespace App\Http\Controllers;

use App\Models\Laporans;
use Illuminate\Http\Request;


class PenggunaController extends Controller
{
    public function BerandaPengguna()
    {
        return view('beranda'); 
    }

    public function LaporanKerusakan()
    {
        return view('laporan');
    }

    // public function simpanLaporan()
    // {
    //     $data_laporan = Laporans::create(request()->all());
    //     return redirect()->to('/');
    // }
}
