@extends('layouts.plantilla')
   
@section('titulo', 'Agregar cuenta')

@section('header')
<img class=" w-16 h-16 absolute imgp3 sm:hidden" src="https://lh3.googleusercontent.com/4hCY7QU-BzMMNFOut18uBJ9h3zNJFNelUUB7GVFqXOdU5jTBiGEt31oT9VolQtcIa0OLHp3csKr-i6bNEAlHbp5wxjNHxuYqasSBjSyy7H1WJTnsDjfC_TXySSTOA-uMneCmeFgqsHwyOyO5QMRAhkT1DgX81DZpMdK9tD2IdX2iiI9v6pPUhO62X8jZ1-NQbh8k_ctXPRNh8KQSpRr7IoPEnBymS4BRy9esozc3Z28V2Od-rWv7GNFD5SibyH44_zsVWpfjt-jr4vNxOLXCEVOOtVZ8nhRbLqhoRptpiXNnPgxtA0AzzQ1CsT7NZ6Cu7JvOn2rjMRFl55QKzVASoyJZSFt9NvpB_RDKjpjZCxO0hDcpE5AvQWuoq2xN7cFPYkz5f6IG5o6zyswEmDBVyU4kEWSxzOpYQ44icpvH2l5WJRuJK_g_W8Lo7Xz1rMj0_9CQASP-20Erum6wEDXVP0n4-bO7HsSoS_fuaD1sGJthw_4GIUQrkK3Tn0i63GvP2O1ICbZxvIVvusUFw1NDkoNvCRWUClae87FjXjyAAfNlhQV6neuy16lu-V79auJWr3VqgvrH_Y0xxXujfHQEBb0hoS46C9U_vM0oP5RaHf39XbLqB_kJI-DvmI_pyLYHs_xC77Jvh8S6uIMvIOC85k5y8UzeWwENa9KBqS4uJYi-4AAdrWUoKXOmnsUbxclV_0mHW6aSGS5nWoG7gv2DaoZFXWg06gkP7LbDG9patOnjUKvYBmIN4EYE6J9_0w=w769-h695-no?authuser=0">

<div class="p-4 bg-blue-500 text-center text-white border-r-2 divide-inherit"><h1>EDITAR USUARIO </h1></div>
<br>

@endsection


@section('contenido')

    <div class="border-2 border-blue-400 mx-8  ">
        <br>

        <form action="{{route('vercuentas.update', $cuenta)}}" method="post" enctype="multipart/form-data"> 
    
            @csrf
            @method('put')

            <label for="Nombre" class="font-semibold ml-11">NOMBRE: </label><br>
            <input type="text" name="name" value="{{$cuenta->name}}" placeholder=" Ingresar usuario" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
            <br><br>
            <label for="Email" class="font-semibold ml-11">Email: </label><br>
            <input type="email" name="email" value="{{$cuenta->email}}" placeholder=" Ingresar correo" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
            <br><br>
            <label for="password" class="font-semibold ml-11">CONTRASEÑA: </label><br>
            <input type="password" name="password" value="{{$cuenta->password}}" placeholder="Ingresar contraseña" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
            <br><br>
            <label for="password" class="font-semibold ml-11">CONFIRMAR CONTRASEÑA: </label><br>
            <input type="password" name="password_confirmation" value="{{$cuenta->password}}" placeholder=" Ingresar contraseña" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
            <br><br>
            
            <select name="perfil_id" id="perfil_id" value="{{$cuenta->perfil_id}}" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500 ">
                <option value="1">USUARIO</option>
                <option value="2">ADMINISTRADOR</option>
            </select>
            <br>
            <br>

            <div class="flex justify-around">
                <input type="submit" class="btnselect" value="ACTUALIZAR">
                <a href=""><div class="btneliminar"> CANCELAR  </div></a> 
            </div>
    
    
        </form>

        <br>

    </div>
    
    <br>
    <br>
    <br>




@endsection

