<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Keluarga;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPenduduk = Penduduk::count();

        $laki = Penduduk::where('jenis_kelamin', 'Laki-laki')->count();

        $perempuan = Penduduk::where('jenis_kelamin', 'Perempuan')->count();

        $totalKK = Keluarga::count();

        return view('dashboard', compact(
            'totalPenduduk',
            'laki',
            'perempuan',
            'totalKK'
        ));
    }
}