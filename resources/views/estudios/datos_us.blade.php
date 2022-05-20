@extends('layouts.plantilla')
   

@section('titulo', 'Ver cuentas')

@section('header')

    <div class="p-3 bg-blue-500 text-center text-white"><h1>USUARIOS QUE YA HAN REGISTRADO SUS DATOS </h1>
    </div>
    <br>

    <div class="flex justify-around">
        <a href="{{route('estudios.index')}}"><div class="btnselect"> <h1>  VER REGISTROS </h1> </div></a>
        <a href="{{route('estudios_pendientes.index')}}"><div class="btnselect"> <h1>  ESTUDIOS PENDIENTES       </h1> </div></a>
    </div>
@endsection



@section('contenido')


<br>
<div class="border-2 border-blue-900 mx-8 ">

    <div class="border-t-2 border-b-2 border-blue-900 bg-blue-800 text-center text-white"><h1>DATOS USUARIO</h1></div>

    <div class="border-t-2 border-blue-900 ">
    {{$cuentas->links()}}
    </div>

    
        <div class="border-t-2 border-b-2 border-blue-900">
            <table class="w-full">
                <tr>
                    <th class="thtabla">USUARIO</th>
                    <th class="thtabla">EMAIL</th>
                    <th class="thtabla">CELULAR</th>
                    <th class="thtabla">FECHA DE NACIMIENTO</th>
                    <th class="thtabla">SEXO</th>
                    <th class="thtabla">CUENTA ID</th>
                    <th class="thtabla">VER</th>

                </tr>
    

                @foreach ($cuentas as $cuenta)
                <tr>
                    
                    <td class="thtabla"> {{$cuenta->nombre}} {{$cuenta->apellido_paterno}} {{$cuenta->apellido_materno}}</td>
                    <td class="thtabla"> {{$cuenta->email}}</td>
                    <td class="thtabla"> {{$cuenta->celular}}</td>
                    <td class="thtabla"> {{$cuenta->fecha_nacimiento}}</td>
                    <td class="thtabla"> {{$cuenta->sexo}}</td>
                    <td class="thtabla"> {{$cuenta->cuenta_id}}</td>
                    <td class="thtabla"> <a href="{{route('estudios.show', $cuenta->id)}}" class="btnedit">ver</a> </td>

                </tr>
                @endforeach
            </table>
        </div>
</div>


@endsection


