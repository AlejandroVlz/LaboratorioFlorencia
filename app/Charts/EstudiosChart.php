<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Estudios;


class EstudiosChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        $data = Estudios::selectRaw('estudios.estudio AS Estudios, COUNT(estudiosusuarios.estudio_id) AS Total_ventas')
        ->join('estudiosusuarios', 'estudiosusuarios.estudio_id', '=', 'estudios.id')
        ->groupBy('estudios.estudio')
        ->orderBy('Total_ventas', 'desc')
        ->get();



        return $this->chart->pieChart()
        ->setTitle('Cantidad de productos por su tipo')
        ->addData($data->pluck('Total_ventas')->toArray())
        ->setLabels($data->pluck('Estudios')->toArray());
    }
}
