       
       
       @extends('layouts.plantillausuario')

@section('titulo', 'Foto de Perfil')

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
    <div class="p-4 bg-blue-400 text-center text-white"><h1>Actualizar foto de perfil</h1></div>
    <br><br>
    <div class="flex justify-center">

        <form action="{{route('foto.store')}}" method="post" enctype="multipart/form-data">
             @csrf
             <input class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500" accept="image/*" type="file" name="imagen"> <br><br>
             <input type="text" class="hidden" value="{{auth()->user()->id;}}" name="usuario_id"><br>
             @error('imagen')
             <p class="ml-12 p-2 w-80 bg-red-500 text-center text-white" > {{$message}}</p>
                <br>
             @enderror
             <input class="ml-12 p-2 w-80 bg-blue-500 border-2 border-blue-500 hover:bg-blue-200" type="submit" value="GUARDAR"> <br> <br>

             @error('message')

            <p class="ml-12 p-2 w-80 bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
         </form>


    </div>

</div>


@endsection
       
       
       
       
       
       