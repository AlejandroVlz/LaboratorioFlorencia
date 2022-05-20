<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Estudios;


class IngresoChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PolarAreaChart
    {


        
        $data = Estudios::selectRaw('estudios.estudio AS Estudios, COUNT(estudiosusuarios.estudio_id) AS Total')
        ->join('estudiosusuarios', 'estudiosusuarios.estudio_id', '=', 'estudios.id')
        ->groupBy('estudios.estudio')
        ->orderBy('Total', 'desc')
        ->get();

        return $this->chart
            ->polarAreaChart()
            ->setTitle('CANTIDAD DE ESTUDIO POR ÁREA')
            ->addData($data->pluck('Total')->toArray())
            ->setLabels($data->pluck('Estudios')->toArray());
    }
}
