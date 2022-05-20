<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

 

</head>
<body>

    <div class="bg-blue-500 text-center p-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute" viewBox="0 0 18 18" fill="currentColor" id="mostrarMenu">
        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
        </svg>
        <div><h1 class="text-white text-xl">FLORENCIA</h1></div>
    </div>

    <div class="bg-blue-200 p-1"></div>

    <div class="sm:hidden  text-center border-2 border-blue-900" id="menu"> 

        <!--navegación -->
        
            <div class="border-2 border-blue-700 h-60 grid grid-cols-1 place-items-center">
                @yield('foto')               


                <div>
                    
                    <h1>
                        @if(auth()->check())
                        {{auth()->user()->name}}
                        @endif
                    </h1>
                </div>
                <br>
                
                
            </div>

            <a href="{{route('perfil.index')}}"><div class="a-boton"> <h1> PERFIL</h1></div></a>
            <a href="{{route('datos.index')}}"><div class="a-boton"><h1>AGREGAR DATOS </h1></div></a>
            
            <a href="{{route('datos.edit', auth()->user()->id)}}"><div class="a-boton "><h1>EDITAR DATOS </h1></div></a>

            <a href="{{route('ver_estudios.index')}}"><div class="a-boton"><h1>MIS ESTUDIOS </h1></div></a>
            <a href="{{route('login.logout')}}"><div class="a-boton"><h1>SALIR</h1></div></a>

        <!--navegación -->
    </div>

    <div class="p-4 "> 
            @yield('contenido')
        
    </div>



 

    <script src="{{ asset('js/main.js')}}" ></script>

   
</body>
</html>