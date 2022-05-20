@extends('layouts.plantilla')


@section('titulo', 'Buscar registro')


@section('css')
<link rel="stylesheet" href="{{ asset('vendor/jquery-ui-1.13.1.custom/jquery-ui.min.css')}}">
 
@endsection


@section('header')
<div class="p-4 bg-blue-500 text-center text-white border-r-2 divide-inherit"><h1>NECESITAS UN REGISTRO, BUSCALO AQUÍ</h1></div>

@endsection







@section('contenido')

<div class="mx-40 border-2 border-blue-500">

    <form action="{{route('buscar.estudio')}}" method="GET">
        <input type="search"  placeholder="INGRESAR NOMBRE O ID" class="w-full p-2 buscador" name="search" value="{{$search}}">
    </form>

</div>

<br><br>

<div class="border-2 border-blue-900 mx-8">

    <div class="border-t-2 border-b-2 border-blue-900 bg-blue-800 text-center text-white"><h1> REGISTROS</h1></div>
    
    

    <div class="border-t-2 border-blue-900 ">
    {{$resultados->links()}}

    </div>
    

    <div class="border-t-2 border-b-2 border-blue-900">
        <table class="w-full">
            <tr>
                <th class="thtabla">USUARIO</th>
                <th class="thtabla">NOMBRE</th>
                <th class="thtabla">EMAIL</th>
                <th class="thtabla">CELULAR</th>
                <th class="thtabla">CUENTA_ID</th>
                <th class="thtabla">VER</th>
                <th class="thtabla">ELIMINAR</th>

            </tr>

            @foreach($resultados as $resultado)
            <tr>
                <td class="thtabla"><a>{{$resultado->cuenta_id}}</a></td>
                <td class="thtabla">{{$resultado->nombre}} {{$resultado->apellido_paterno}} {{$resultado->apellido_materno}}</td>
                <td class="thtabla">{{$resultado->email}}</td>
                <td class="thtabla">{{$resultado->celular}}</td>
                <td class="thtabla">{{$resultado->cuenta_id}}</td>
                <td class="thtabla"><a href="{{route('estudios.show', $resultado->id)}}" class="btnedit">ver</a></td>
                <td class="thtabla">
                        <form action="{{route('buscar.destroy', $resultado->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btnedelete">eliminar</button>
                        </form>                
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection



