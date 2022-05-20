@extends('layouts.plantilla')
   
@section('titulo', 'Agregar cuenta')

@section('header')
<img class=" w-16 h-16 absolute imgp3 sm:hidden" src="https://lh3.googleusercontent.com/4hCY7QU-BzMMNFOut18uBJ9h3zNJFNelUUB7GVFqXOdU5jTBiGEt31oT9VolQtcIa0OLHp3csKr-i6bNEAlHbp5wxjNHxuYqasSBjSyy7H1WJTnsDjfC_TXySSTOA-uMneCmeFgqsHwyOyO5QMRAhkT1DgX81DZpMdK9tD2IdX2iiI9v6pPUhO62X8jZ1-NQbh8k_ctXPRNh8KQSpRr7IoPEnBymS4BRy9esozc3Z28V2Od-rWv7GNFD5SibyH44_zsVWpfjt-jr4vNxOLXCEVOOtVZ8nhRbLqhoRptpiXNnPgxtA0AzzQ1CsT7NZ6Cu7JvOn2rjMRFl55QKzVASoyJZSFt9NvpB_RDKjpjZCxO0hDcpE5AvQWuoq2xN7cFPYkz5f6IG5o6zyswEmDBVyU4kEWSxzOpYQ44icpvH2l5WJRuJK_g_W8Lo7Xz1rMj0_9CQASP-20Erum6wEDXVP0n4-bO7HsSoS_fuaD1sGJthw_4GIUQrkK3Tn0i63GvP2O1ICbZxvIVvusUFw1NDkoNvCRWUClae87FjXjyAAfNlhQV6neuy16lu-V79auJWr3VqgvrH_Y0xxXujfHQEBb0hoS46C9U_vM0oP5RaHf39XbLqB_kJI-DvmI_pyLYHs_xC77Jvh8S6uIMvIOC85k5y8UzeWwENa9KBqS4uJYi-4AAdrWUoKXOmnsUbxclV_0mHW6aSGS5nWoG7gv2DaoZFXWg06gkP7LbDG9patOnjUKvYBmIN4EYE6J9_0w=w769-h695-no?authuser=0">

<div class="p-4 bg-blue-500 text-center text-white border-r-2 divide-inherit"><h1>GENERAR NUEVA CUENTA PARA USUARIO</h1></div>
<br>
    <div class="flex justify-around">
        <a href="{{route('registro.index')}}"><div class="bg-blue-800 h-10 p-2 w-60 text-center text-white b-boton01 rounded-md"> <h1>  AGREGAR CUENTA </h1> </div></a>
        <a href="{{route('ver.index')}}"> <div class="bg-purple-900 h-10 p-2 w-60 text-center text-white b-boton rounded-md"><h1>  VER CUENTAS </h1></div></a>
    </div>
@endsection


@section('contenido')




    <div class="border-2 border-blue-400 mx-8  ">
        <br>

        <form action="{{route('registro.store')}}" method="post"> 
    
            @csrf
            <label for="Nombre" class="font-semibold ml-11">NOMBRE: </label><br>
            <input type="text" name="name" placeholder=" Ingresar usuario" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
            <br>
            @error('name')
            <p class="ml-12 w-60 bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            <br>
            <label for="Email" class="font-semibold ml-11">Email: </label><br>
            <input type="email" name="email" placeholder=" Ingresar usuario" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
            <br>
            @error('email')
            <p class="ml-12 w-60 bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            <br>
            <label for="password" class="font-semibold ml-11">CONTRASEÑA: </label><br>
            <input type="password" name="password" placeholder="Ingresar contraseña" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
            <br>
            @error('password')
            <p class="ml-12 w-60 bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            <br>
            <label for="password" class="font-semibold ml-11">CONFIRMAR CONTRASEÑA: </label><br>
            <input type="password" name="password_confirmation" placeholder=" Ingresar contraseña" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
            <br><br>
            
            <select name="perfil_id" id="perfil_id" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
                <option value="1">USUARIO</option>
                <option value="2">ADMINISTRADOR</option>
            </select>
            <br>
            @error('perfil_id')
            <p class="ml-12 w-60 bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            <br>
            <div class="flex justify-around">
                <a><input type="submit" class="btnselect" value="AGREGAR CUENTA"> </a>
                <a href=""><div class="btneliminar"> CANCELAR  </div></a> 
            </div>
    
    
        </form>

        <br>

    </div>
    
    <br>
    <br>
    <br>




@endsection

