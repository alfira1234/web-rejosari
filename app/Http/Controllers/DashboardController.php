<?php

namespace App\Http\Controllers;

use App\Charts\KategoriChart;
use App\Charts\PesanChart;
use App\Models\Paket;
use App\Models\Pesan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(PesanChart $chart, KategoriChart $chartkategori)
    {
    $jumlah = Pesan::count('id');
        $pengunjung = Pesan::select('jml_org')->sum('jml_org');
        $jmlpaket= Paket::count('name');
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'chart' => $chart->build(),
        'chartkategori' => $chartkategori->build(),
        'pesanpaket' => $jumlah,
        'jmlorang' => $pengunjung,
        'jmlpaket' => $jmlpaket
    ]);
}
}
