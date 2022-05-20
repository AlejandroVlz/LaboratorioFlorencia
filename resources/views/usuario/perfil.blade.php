@extends('layouts.plantillausuario')

@section('titulo', 'Perfil')


@section('contenido')


<div class="border-2 border-blue-400">
    <div class="p-4 bg-blue-400 text-center text-white"><h1>TUS DATOS PERSONALES</h1>
    </div>

    <br>
    <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Nombre:</label><br>
    <h1 class="pl-10 pb-4 w-60 ">{{$cuenta[0]->nombre}} {{$cuenta[0]->apellido_paterno}} {{$cuenta[0]->apellido_materno}}</h1>


    <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Genero:</label><br>
    <h1 class="pl-10 pb-4 w-60 ">{{$cuenta[0]->sexo}}</h1>

    
    <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Fecha de nacimiento:</label><br>
    <h1 class="pl-10 pb-4 w-60 ">{{$cuenta[0]->fecha_nacimiento}}</h1>

    
    <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">CURP:</label><br>
    <h1 class="pl-10 pb-4 w-60 ">{{$cuenta[0]->CURP}}</h1>

    
    <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Celular:</label><br>
    <h1 class="pl-10 pb-4 w-60 ">{{$cuenta[0]->celular}}</h1>

    
    <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Email:</label><br>
    <h1 class="pl-10 pb-4 w-60 ">{{$cuenta[0]->email}}</h1>
    

    <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Dirección:</label><br>
    <h1 class="pl-10 pb-4 w-60 ">{{$estado->estado}}, {{$municipio->municipio}}, {{$cuenta[0]->localidad}}</h1>







</div>


@endsection