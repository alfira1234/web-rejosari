<?php

namespace App\Charts;

use App\Models\kategori;
use App\Models\Paket;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class KategoriChart
{
    protected $chartkategori;

    public function __construct(LarapexChart $chartkategori)
    {
        $this->chartkategori = $chartkategori;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {

        //data dari pesan paket
        $paket = Paket::get();
        $data = [
        $paket->where('kategori_id', 1)->count(),
        $paket->where('kategori_id', 2)->count(),
        $paket->where('kategori_id', 3)->count(),

    ];
    //nama label
    $kategori = [
        'Alam',
        'Peternakan',
        'Pertanian'
    ];


    return $this->chartkategori->donutChart()
            ->setTitle('Diagram Kategori')
            // ->setSubtitle('paket wisata')
            ->addData($data)
            ->setWidth(400)
            ->setHeight(400)
            ->setLabels($kategori);
    }
}
