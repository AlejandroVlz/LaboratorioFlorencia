@extends('layouts.plantillausuario')

@section('titulo', 'Datos del usuario')


@section('contenido')

<br>

<div class="border-2 border-blue-400">

    <div class="p-4 bg-blue-400 text-center text-white"><h1>INGRESA TUS DATOS</h1>
    </div>
    <br>
    <div class="flex justify-center">

        <form action="{{route('datos.store')}}" method="post">
            
            @csrf
            
            <input type="text" placeholder="Nombre(s)" name="nombre" class="placeholder-gray-500 p-2 w-60 border-2 "> <br> <br>
            <input type="text" placeholder="Primer apellido" name="apellido_paterno" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>
            <input type="text" placeholder="Seundo apellido" name="apellido_materno" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>

            <label for="genero" class="p-2 w-60 ">Genero</label><br>
            <select name="sexo" id="sexo" class="p-2 w-60 border-2 ">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>  <br><br>

            <label for="Fechadenacimiento" class="p-2 w-60 ">Fecha de nacimiento</label><br>

            <input type="date"  name="fecha_nacimiento" class="p-2 w-60 border-2"> <br> <br>

            <input type="text" placeholder="CURP" name="CURP" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>

            <input type="tel" placeholder="Celular" name="celular" class="placeholder-gray-500 p-2 w-60 border-2 "> <br> <br>



            <input type="email" placeholder="{{auth()->user()->email}}" name="email" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>

            <label for="estado_id" class="p-2 w-60 ">Estado</label><br>

            <select name="estado_id" id="estado_id" class="p-2 w-60 ">

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

            <input type="text" placeholder="Localidad" name="localidad" class="placeholder-gray-500 p-2 w-60 border-2"> <br> <br>


            <label for="cuenta_id" class="p-2 w-60 ">Cuenta ID</label><br>
            <select name="cuenta_id" id="cuenta_id" class="p-2 w-60 ">

                <option value="{{auth()->user()->id}}">{{auth()->user()->id}}</option>
             
            </select>

            <br>
            <br>

            @error('message')

            <p class="p-2 w-60 bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            <input type="submit" class="bg-blue-800 text-center text-white b-boton01 p-2 w-60" value="GUARDAR"> <br> <br>

        </form>

            
    </div>
    
    <div class="flex justify-center"><a href="{{route('datos.edit', auth()->user()->id)}}" class="bg-blue-800 text-center text-white b-boton01 px-24 py-2"> EDITAR</a></div>
    <br>
</div>



@endsection