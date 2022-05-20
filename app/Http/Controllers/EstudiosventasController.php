<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\EstudioChart;



class EstudiosventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EstudioChart $chart)
    {
 

        return view('graficas.index', ['chart' => $chart->build()]);

    }

  
}
