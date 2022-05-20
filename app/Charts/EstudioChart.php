<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Estudios;


class EstudioChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {

                
        $data = Estudios::selectRaw('estudios.estudio AS Estudios, COUNT(estudiosusuarios.estudio_id) AS Total')
        ->join('estudiosusuarios', 'estudiosusuarios.estudio_id', '=', 'estudios.id')
        ->groupBy('estudios.estudio')
        ->orderBy('Total', 'desc')
        ->get();

        return $this->chart->barChart()
            ->setTitle('CANTIDAD DE ESTUDIO REALIZADO POR ÁREA')
            ->addData('Estudio', $data->pluck('Total')->toArray())
            ->setXAxis($data->pluck('Estudios')->toArray());
    }
}
