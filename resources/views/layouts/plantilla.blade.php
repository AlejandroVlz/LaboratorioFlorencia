<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">


    <title>@yield('titulo')</title>

    @yield('css')


</head>
<body>

    
    <div class="flex">

        <div class="border-2 border-blue-900 text-center " >
            <!--navegación -->
            <nav>
                <div class="border-2 border-blue-700 h-60 grid grid-cols-1 place-items-center">
                   
                    <div class=" bg-blue-800 rounded-full h-36 w-36 ">
                        <img src="" alt="">
                    </div>

                    <div>
                        <h1>{{auth()->user()->name;}}</h1>
                    </div>
                    <br>
                    
                    
                </div>

                <a href="{{route('registro.index')}}"><div class="a-boton"> <h1>ADMIISTRADOR DE CUENTAS</h1></div></a>
                <a href="{{route('estudios.index')}}"><div class="a-boton"><h1>GESTIÓN DE ESTUDIOS</h1></div></a>
                <a href="{{route('buscar.estudio')}}"><div class="a-boton"><h1>BUSCAR UN USUARIO</h1></div></a>
                <a href="{{route('grafica.index')}}"><div class="a-boton"><h1>GRÁFICA DE DATOS</h1></div></a>
                <a href="{{route('login.logout')}}"><div class="a-boton"><h1>SALIR</h1></div></a>




                
            </nav>
            <!--navegación -->
        </div>
        

        <div class="w-full">
         
            <!--header -->
    
            @yield('header')
            
            <!--header -->
            <br>
            <br>

            <!--contenido -->
        
            @yield('contenido')
        
            <!--contenido -->
        </div>
    
    

    </div>


    
</body>
</html>