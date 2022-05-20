@extends('layouts.plantilla')




@section('header')

<div class="border-2 border-blue-400 flex flex-row sm:flex-col">

    
    <div class="basis-1/2 ">
        <div class="p-4 bg-blue-500 text-center text-white border-r-2 divide-inherit"><h1>DATOS PERSONALES DEL USUARIO</h1></div>

        <br>

        <br>
        <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Nombre:</label><br>
        <h1 class="pl-10 pb-4 w-60 ">{{$cuenta->nombre}} {{$cuenta->apellido_paterno}} {{$cuenta->apellido_materno}}</h1>


        <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Genero:</label><br>
        <h1 class="pl-10 pb-4 w-60 ">{{$cuenta->sexo}}</h1>

        
        <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Fecha de nacimiento:</label><br>
        <h1 class="pl-10 pb-4 w-60 ">{{$cuenta->fecha_nacimiento}}</h1>

        
        <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">CURP:</label><br>
        <h1 class="pl-10 pb-4 w-60 ">{{$cuenta->CURP}}</h1>

        
        <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Celular:</label><br>
        <h1 class="pl-10 pb-4 w-60 ">{{$cuenta->celular}}</h1>

        
        <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Email:</label><br>
        <h1 class="pl-10 pb-4 w-60 ">{{$cuenta->email}}</h1>
        

        <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Dirección:</label><br>
        <h1 class="pl-10 pb-4 w-60 ">{{$estado->estado}}, {{$municipio->municipio}}, {{$cuenta->localidad}}</h1>



    </div>



    <div class="basis-1/2">

        <div class="p-4 bg-blue-500 text-center text-white"><h1>REGISTRAR NUEVO ESTUDIO</h1></div>
    
        <br>
        <br>
            <div class="text-center font-semibold">
        
                <form action="{{route('estudios.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" value="{{$cuenta->id}}" name="usuario_id" class="placeholder-gray-500 p-2 w-60 buscador border-2 border-blue-500"> <br> <br>
                   

                    <select name="estudio_id" id="estudio_id" placeholder="Estudio_id" class="placeholder-gray-500 p-2 w-60 buscador border-2 border-blue-500">

                        @foreach($estudios as $estudiov)
                        
                        <option value="{{$estudiov->id}}">{{$estudiov->estudio}}</option>

                        @endforeach
                    </select>

                    <br><br>


                    <select name="estatus" id="estatus" class="placeholder-gray-500 p-2 w-60 buscador border-2 border-blue-500">
                        <option value="pendiente">PENDIENTE</option>
                    </select>
                    <br>
                    <br>
                    
                    <input type="submit" class="p-2 bg-blue-400 btn w-60 " value="GUARDAR"> <br> <br>
                </form>
                
            </div>


    </div>

        
        
</div>


@endsection



@section('contenido')

    


    <div class="p-4 bg-blue-500 text-center text-white"><h1>ESTUDIOS DEL USUARIO</h1></div>
    
    <div class="border-2 border-blue-400 text-center">
    
        @foreach($estudio as $estudios)
        
            <embed src="{{asset($estudio[0]->file)}}" type="application/pdf" width="420px" height="630px" />

        @endforeach

    </div>

   

@endsection
