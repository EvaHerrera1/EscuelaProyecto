@extends('plantillas.plantilla')
@section('titulo', 'Profesor')
@section('contenido')

<h1> Detalles de {{$profesors->primer_nombre}} {{$profesors->primer_apellido}}
<a class="btn btn-warning" href="{{route ('profesor.edit', ['id'=>$profesors->id])}}"> Editar </a>
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
            <td scope="col">{{ $profesors->primer_nombre}} </td>
        </tr>
        <tr>
            <th scope="row">Primer Apellido</th>
            <td scope="col">{{ $profesors->primer_apellido }} </td>
        </tr>

        <tr>
            <th scope="row">Telefono</th>
            <td scope="col">{{ $profesors->telefono}} </td>
        </tr> 

        <tr>
            <th scope="row">Identidad</th>
            <td scope="col">{{ $profesors->identidad }} </td>
        </tr>
        
        <tr>
            <th scope="row">Direccion</th>
            <td scope="col">{{ $profesors->direccion }} </td>
        </tr>
        <tr>
            <th scope="row">Correo</th>
            <td scope="col">{{ $profesors->correo}} </td>
        </tr>

        <tr>
            <th scope="row">Hora De Entrada</th>
            <td scope="col">{{ $profesors->hora_entrada}} </td>
        </tr>
        <tr>
            <th scope="row">Hora De Salida</th>
            <td scope="col">{{ $profesors->hora_salida}} </td>
        </tr>
    </tbody>
</table>

<a class="btn btn-primary" href="{{route('profesor.index')}}"> Volver </a>

@endsection 
