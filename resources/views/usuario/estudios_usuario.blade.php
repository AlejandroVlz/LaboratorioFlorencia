@extends('layouts.plantillausuario')

@section('titulo', 'Estudios')



@section('foto')

@if(count($foto)==0)

<div class=" rounded-full h-36 w-36 ">
    <a href="{{route('foto.index')}}" class="btnedit">Agregar foto</a>
</div>

@else

<div class=" rounded-full h-36 w-36 ">
    <img class=" rounded-full h-36 w-36 " src="{{asset($foto[0]->imagen)}}" alt="">
</div>

@endif

@endsection


@section('contenido')


<div class="border-2 border-blue-400">
  
        <table class="w-full flex">
            <tr>
                <th class="thtabla">Estudio</th>
                <th class="thtabla">Fecha de subida</th>
            </tr>
            @foreach($estudio as $estudios)
            <tr>
                <td class="thtabla"><a href="{{asset($estudio[0]->file)}}" download="Estudio {{$estudio[0]->created_at}}" class="btnedit">Descargar</a><br></td>
                <td class="thtabla">{{$estudio[0]->created_at}}</td>
            </tr>
            @endforeach

        </table>


</div>


@endsection