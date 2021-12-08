@extends('plantillas.plantilla')
@section('titulo', 'Alumno')
@section('contenido')

<h1> Detalles de {{$alumnos->primer_nombre}} {{$alumnos->primer_apellido}}
<a class="btn btn-warning" href="{{route ('alumno.edit', ['id'=>$alumnos->id])}}"> Editar </a>
</h1>
<br>
<table class="table">
    <thead class="table-secondary">
        <tr>
            <th scope="col">Campos</th>
            <th scope="col">Valor</th>
            
        </tr>  
    </thead>
    <tbody>
        <tr>
            <th scope="row">Primer Nombre</th>
            <td scope="col">{{ $alumnos->primer_nombre}} </td>
        </tr>
        <tr>
            <th scope="row">Primer Apellido</th>
            <td scope="col">{{ $alumnos->primer_apellido }} </td>
        </tr>
        <tr>
            <th scope="row">Edad</th>
            <td scope="col">{{ $alumnos->edad }} </td>
        </tr>
        <tr>
            <th scope="row">Telefono</th>
            <td scope="col">{{ $alumnos->telefono}} </td>
        </tr> 
        <tr>
            <th scope="row">Direccion</th>
            <td scope="col">{{ $alumnos->direccion }} </td>
        </tr>
        <tr>
            <th scope="row">Jornada</th>
            <td scope="col">{{ $alumnos->jornada}} </td>
        </tr>

        <tr>
            <th scope="row">Grado Id</th>
            <td scope="col">{{ $alumnos->grado_id}} </td>
        </tr>
    </tbody>
</table>

<a class="btn btn-primary" href="{{route('alumno.index')}}"> Volver </a>

@endsection 
