<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if(empty($datos[0]->file))


<h1>Hola {{$datos[0]->nombre}} tu estudio esta en proceso</h1>

    <div>
        
        <p>Gracias por por preferir los servicios de Hospital Florencia, el motivo de este correo es por la solicitud de estudios dentro del hospital. Verifica que tus datos esten correctos</p>
        <h4>Tu infromación es</h4>

        <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Nombre: </label>
        <h4>{{$datos[0]->nombre}} {{$datos[0]->apellido_paterno}} {{$datos[0]->apellido_materno}} </h4>


        <label for="Estatus" class="pl-10 pb-4 w-60 font-semibold">Estatus: </label>
        <h4>{{$datos[0]->estatus}}</h4>

        <label for="Estudio" class="pl-10 pb-4 w-60 font-semibold">Estudio: </label>
        <h4>{{$estudion->estudio}}</h4>

        <label for="Fecha" class="pl-10 pb-4 w-60 font-semibold">Fecha de solicitud: </label>
        <h4>{{$datos[0]->created_at}}</h4>

    </div>

@else

<h1>Hola {{$datos[0]->nombre}} tu estudio ha finalizado, podrás descargar los resultados</h1>

<div>
    
    <p>Gracias por por preferir los servicios de Hospital Florencia, el motivo de este correo es por la solicitud de estudios dentro del hospital</p>
    <h4>Tu infromación es</h4>

    <label for="Nombre" class="pl-10 pb-4 w-60 font-semibold">Nombre: </label>
    <h4>{{$datos[0]->nombre}} {{$datos[0]->apellido_paterno}} {{$datos[0]->apellido_materno}} </h4>

>

    <label for="Estatus" class="pl-10 pb-4 w-60 font-semibold">Estatus: </label>
    <h4>{{$datos[0]->estatus}}</h4>

    <label for="Estudio" class="pl-10 pb-4 w-60 font-semibold">Estudio: </label>
    <h4>{{$estudion->estudio}}</h4>

    <label for="Fecha" class="pl-10 pb-4 w-60 font-semibold">Fecha de solicitud: </label>
    <h4>{{$datos[0]->created_at}}</h4>
    

    <h4>Descarga el formato de tu estudio dando clic a el siguiente enlace</h4>
    <p>Este es son sus estudios</p>
    <a href="{{asset($datos[0]->file)}}" download="Estudio  {{$datos[0]->nombre}}">Descarga tu estudio</a><br>

</div>

@endif





</body>
</html>