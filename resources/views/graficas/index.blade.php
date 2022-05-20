
@extends('layouts.plantilla')



@section('titulo', 'Graficas')



@section('header')

<div class="p-4 bg-blue-500 text-center text-white border-r-2 divide-inherit"><h1>DATOS RELEVANTES DENTRO DEL LABORATORIO</h1></div>

@endsection







@section('contenido')

<div class="border-2 border-blue-900 mx-8">
    <div class="">
    
        <div class="">
            <br>
            {!! $chart->container() !!}
        </div>
        
    
    </div>

    <div>

    </div>


</div>





<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}


<script src="{{ @asset('vendor/larapex-charts/apexcharts.js') }}"></script>


@endsection





