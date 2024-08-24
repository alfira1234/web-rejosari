<?php

namespace App\Charts;

use App\Models\Pesan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PesanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }


    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {

        //data dari pesan paket
        $pesanan = Pesan::get();
        $data = [
        $pesanan->where('paket_id', 1)->count(),
        $pesanan->where('paket_id', 2)->count(),
        $pesanan->where('paket_id', 4)->count(),
        $pesanan->where('paket_id', 5)->count(),
        $pesanan->where('paket_id', 3)->count(),
    ];
    //nama label
    $paket = [
        'Wisata Edukasi Ternak Kambing',
        'Wisata Edukasi Kincir Air',
        'Wisata Edukasi Tanam Durian',
        'Wisata Alam Landscape',
        'Wisata Edukasi Tanam Jamur'
    ];


        return $this->chart->donutChart()
            ->setTitle('Diagram Paket Wisata')
            // ->setSubtitle('paket wisata')
            ->addData($data)
            ->setWidth(600)
            ->setHeight(600)
            ->setLabels($paket);
    }
}
