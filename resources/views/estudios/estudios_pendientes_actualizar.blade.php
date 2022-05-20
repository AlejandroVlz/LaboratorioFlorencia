@extends('layouts.plantilla')


@section('header')

    <div class="p-4 bg-blue-500 text-center text-white"><h1>ACTUALIZAR ESTUDIO </h1>
    </div>
    
@endsection



@section('contenido')

<img class=" w-16 h-16 absolute imgp" src="https://lh3.googleusercontent.com/4hCY7QU-BzMMNFOut18uBJ9h3zNJFNelUUB7GVFqXOdU5jTBiGEt31oT9VolQtcIa0OLHp3csKr-i6bNEAlHbp5wxjNHxuYqasSBjSyy7H1WJTnsDjfC_TXySSTOA-uMneCmeFgqsHwyOyO5QMRAhkT1DgX81DZpMdK9tD2IdX2iiI9v6pPUhO62X8jZ1-NQbh8k_ctXPRNh8KQSpRr7IoPEnBymS4BRy9esozc3Z28V2Od-rWv7GNFD5SibyH44_zsVWpfjt-jr4vNxOLXCEVOOtVZ8nhRbLqhoRptpiXNnPgxtA0AzzQ1CsT7NZ6Cu7JvOn2rjMRFl55QKzVASoyJZSFt9NvpB_RDKjpjZCxO0hDcpE5AvQWuoq2xN7cFPYkz5f6IG5o6zyswEmDBVyU4kEWSxzOpYQ44icpvH2l5WJRuJK_g_W8Lo7Xz1rMj0_9CQASP-20Erum6wEDXVP0n4-bO7HsSoS_fuaD1sGJthw_4GIUQrkK3Tn0i63GvP2O1ICbZxvIVvusUFw1NDkoNvCRWUClae87FjXjyAAfNlhQV6neuy16lu-V79auJWr3VqgvrH_Y0xxXujfHQEBb0hoS46C9U_vM0oP5RaHf39XbLqB_kJI-DvmI_pyLYHs_xC77Jvh8S6uIMvIOC85k5y8UzeWwENa9KBqS4uJYi-4AAdrWUoKXOmnsUbxclV_0mHW6aSGS5nWoG7gv2DaoZFXWg06gkP7LbDG9patOnjUKvYBmIN4EYE6J9_0w=w769-h695-no?authuser=0">


    <div   class="border-2 border-blue-400 mx-8  text-center font-semibold">
        <br>

        <form action="{{route('estudios.pendietes.update', $estudio)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="IDUSUARIO" class="pl-10 pb-4 w-60 font-semibold">ID USUARIO:</label><br>
            <input type="text" value="{{$estudio->usuario_id}}" name="usuario_id" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500"> <br> <br>
            @error('usuario_id')
            <p class=" bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            <label for="IDESTUDIO" class="pl-10 pb-4 w-60 font-semibold">ID ESTUDIO:</label><br>
            
            <select name="estudio_id" id="estatus" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500">
                <option value="{{$estudio->estudio_id}}">{{$estudion->estudio}}</option>
            </select><br><br>
            @error('estudio_id')
            <p class=" bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            <label for="IDESTUDIO" class="pl-10 pb-4 w-60 font-semibold">ESTATUS DEL ESTUDIO:</label><br>

            <select name="estatus" id="estatus" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500">
                <option value="finalizado">FINALIZADO</option>
                <option value="pendiente">PENDIENTE</option>
            </select>
            <br><br>
            @error('estatus')
            <p class=" bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            <input type="file" accept="application/pdf,application/vnd.ms-excel" placeholder="Estudio" name="file" class="ml-12 placeholder-gray-500 p-2 w-80 buscador  border-2 border-blue-500"> <br> <br>
            <br>
            @error('file')
            <p class=" bg-red-500 text-center text-white" > {{$message}}</p>
            <br>
            @enderror
            
            <input type="submit" class="ml-12 p-2 w-80 bg-blue-500 border-2 border-blue-500 hover:bg-blue-200" value="ACTUALIZAR"> <br> <br>
        </form>
        
    </div>

      
   

@endsection
