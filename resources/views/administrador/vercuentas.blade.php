@extends('layouts.plantilla')
   

@section('titulo', 'Ver cuentas')

@section('header')
    <div class="p-3 bg-blue-500 text-center text-white"><h1>CUENTAS DE INICIO DE SESIÓN USUARIOS</h1>
    </div>
    <br>

    <div class="flex justify-around">
        <a href="{{route('registro.index')}}"><div class="bg-blue-800 h-10 p-2 w-60 text-center text-white b-boton01 rounded-md"> <h1>  AGREGAR CUENTA </h1> </div></a>
        <div class="bg-purple-900 h-10 p-2 w-60 text-center text-white b-boton rounded-md"> <h1>  VER CUENTAS       </h1> </div>
    </div>
@endsection




@section('contenido')

<div class="mx-40 border-2 border-blue-500">
    <form action="{{route('ver.index')}}" method="GET">
        <input type="search"  placeholder="INGRESAR NOMBRE O ID" class="w-full p-2 buscador" name="search" value="{{$search}}">
    </form>
</div>

<br>
<div class="border-2 border-blue-900 mx-8 ">

    <div class="border-t-2 border-b-2 border-blue-900 bg-blue-800 text-center text-white"><h1>CUENTAS</h1></div>

    <div class="border-t-2 border-blue-900 ">
    {{$cuentas->links()}}
    </div>

    
        <div class="border-t-2 border-b-2 border-blue-900">
            <table class="w-full">
                <tr>
                    <th class="thtabla">USUARIO</th>
                    <th class="thtabla">EMAIL</th>
                    <th class="thtabla">STATUS</th>
                    <th class="thtabla">FECHA</th>
                    <th class="thtabla">EDITAR</th>
                    <th class="thtabla">ELIMINAR</th>
                </tr>

                @foreach ($cuentas as $cuenta)
                <tr>
                    <td class="thtabla">{{$cuenta->name}}</td>
                    <td class="thtabla">{{$cuenta->email}}</td>
                    <td class="thtabla"> @if($cuenta->perfil_id  == 1)
                            Usuario
                         @else 
                            Administrador
                         @endif

                    </td>

                    <td class="thtabla">{{$cuenta->created_at}}</td>
                    <td class="thtabla"><a href="{{route('vercuentas.edit', $cuenta->id)}}" class="btnedit">ver</a></td>

                    
                    <td class="thtabla">
                        <form action="{{route('vercuentas.destroy', $cuenta->id)}}" method="post">
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


