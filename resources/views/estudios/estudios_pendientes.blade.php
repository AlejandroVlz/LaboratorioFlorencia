@extends('layouts.plantilla')


@section('titulo', 'Estudios pendientes')

@section('header')


    <div class="p-3 bg-blue-500 text-center text-white"><h1>ESTUDIOS PENDIENTES </h1>
    </div>
    <br>

    <div class="flex justify-around">
        <a href="{{route('estudios.index')}}"><div class="btnselect"> <h1>  VER CUENTAS </h1> </div></a>
        <a href="{{route('estudios_pendientes.index')}}"><div class="btnselect"> <h1>  ESTUDIOS PENDIENTES       </h1> </div></a>
    </div>
@endsection



@section('contenido')

    <div class="mx-40 border-2 border-blue-500">

        <form action="{{route('estudios_pendientes.index')}}" method="GET">
            <input type="search"  placeholder="INGRESAR NOMBRE O ID" class="w-full p-2 buscador" name="search" value="{{$search}}">
        </form>
    </div>


<br>

<div class="border-2 border-blue-900 mx-8 ">

    <div class="border-t-2 border-b-2 border-blue-900 bg-blue-800 text-center text-white"><h1>ESTUDIOS PENDIENTES</h1></div>
 

    <div class="border-t-2 border-blue-900 ">
    {{$estudios->links()}}

    </div>
    
        <div class="border-t-2 border-b-2 border-blue-900">
            <table class="w-full">
                    <tr>
                        <th class="thtabla">USUARIO</th>
                        <th class="thtabla">NOMBRE</th>
                        <th class="thtabla">ESTUDIO</th>
                        <th class="thtabla">ESTATUS</th>
                        <th class="thtabla">ARCHIVO</th>
                        <th class="thtabla">FECHA</th>
                        <th class="thtabla">VER</th>
                    </tr>

                    @foreach($estudios as $estudio)
                    <tr>
                        <td class="thtabla"><a href="{{route('estudios.pendietes.edit', $estudio->id)}}">{{$estudio->usuario_id}}</a></td>
                        <td class="thtabla">{{$estudio->nombre}} {{$estudio->apellido_paterno}} {{$estudio->apellido_materno}}</td>
                        <td class="thtabla">{{$estudio->estudio_id}}</td>
                        <td class="thtabla">{{$estudio->estatus}}</td>
                        <td class="thtabla">{{$estudio->file}}</td>
                        <td class="thtabla">{{$estudio->created_at}}</td>
                        <td class="thtabla"><a href="{{route('estudios.pendietes.edit', $estudio->id)}}" class="btnedit">ver</a></td>
                    </tr>
    
                    @endforeach
    
            </table>

            <br>
            
        </div>
   
        
</div>




@endsection






