@extends('layouts.plantillausuario')

@section('titulo', 'Editar datos')


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

<br>

<div class="border-2 border-blue-400">

    <div class="p-4 bg-blue-400 text-center text-white"><h1>ACTUALIZA TUS DATOS</h1>
    </div>
    <br>
    <div class="flex justify-center">

        <form action="{{route('datos.update', $cuenta[0]->id)}}" method="post">


            
            @csrf

            @method('put')
            
            
            <input type="text" value="{{$cuenta[0]->nombre}}" placeholder="Nombre(s)" name="nombre" class="placeholder-gray-500 p-2 w-60 border-2 "> <br> <br>
            <input type="text" value="{{$cuenta[0]->apellido_paterno}}" placeholder="Primer apellido" name="apellido_paterno" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>
            <input type="text" value="{{$cuenta[0]->apellido_materno}}" placeholder="Seundo apellido" name="apellido_materno" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>

            <label for="genero" class="p-2 w-60 ">Genero</label><br>
            <select name="sexo" id="sexo" class="p-2 w-60 border-2 ">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>  <br><br>

            <label for="Fechadenacimiento" class="p-2 w-60 ">Fecha de nacimiento</label><br>

            <input type="date"  name="fecha_nacimiento" value="{{$cuenta[0]->fecha_nacimiento}}" class="p-2 w-60 border-2"> <br> <br>

            <input type="text" value="{{$cuenta[0]->CURP}}" placeholder="CURP" name="CURP" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>

            <input type="tel" value="{{$cuenta[0]->celular}}" placeholder="Celular" name="celular" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>


            <input type="email" value="{{$cuenta[0]->email}}" placeholder="{{auth()->user()->email}}" name="email" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>

            <label for="estado_id" class="p-2 w-60 ">Estado</label><br>

            <select name="estado_id" id="estado_id" class="p-2 w-60">

                @foreach($estados as $estado)

                    <option value="{{$estado->id}}">{{$estado->estado}}</option>
                @endforeach
            </select>
            
            <br><br>

            <label for="municipio_id" class="p-2 w-60 ">Municipio</label><br>
            <select name="municipio_id" id="municipio_id" class="p-2 w-60 ">

                @foreach($municipios as $municipio)

                <option value="{{$municipio->id}}">{{$municipio->municipio}}</option>
                @endforeach

            </select>

            <br><br>

            <input type="text" value="{{$cuenta[0]->localidad}}" placeholder="Localidad" name="localidad" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>

            <label for="cuenta_id" class="p-2 w-60 ">Cuenta ID</label><br>
            <select name="cuenta_id" id="cuenta_id" class="p-2 w-60 ">

                <option value="{{auth()->user()->id}}">{{auth()->user()->id}}</option>
             
            </select>
            <br>
            <br>

            <input type="submit" class="bg-blue-800 text-center text-white b-boton01 p-2 w-60" value="ACTUALIZAR"> <br> <br>

        </form>
            
    </div>
</div>

@endsection