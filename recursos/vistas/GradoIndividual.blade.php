@extends('plantillas.plantilla')
@section('titulo', 'Grado')
@section('contenido')

<h1> Detalles de {{$grados->grado}} {{$grados->seccion}}
<a class="btn btn-warning" href="{{route ('grado.edit', ['id'=>$grados->id])}}"> Editar </a>
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
            <th scope="row">Grado</th>
            <td scope="col">{{ $grados->grado}} </td>
        </tr>
        <tr>
            <th scope="row">Seccion</th>
            <td scope="col">{{ $grados->seccion }} </td>
        </tr>

        <tr>
            <th scope="row">Aula</th>
            <td scope="col">{{ $grados->aula}} </td>
        </tr> 
    </tbody>

    
</table>
<h1>Profesores Del Grado</h1>
<table class="table">
    <thead class="table-secondary">
        <tr>
            <th scope="col">Primer Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Identidad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Correo</th>
            <th scope="col">Hora Entrada</th>
            <th scope="col">Hora Salida</th>
        </tr>  
    </thead>
    <tbody>
        @forelse ($grados->profesors as $profesor)
        <tr>
            <td scope="col">{{ $profesor->primer_nombre}} </td>
            <td scope="col">{{ $profesor->primer_apellido}} </td>
            <td scope="col">{{ $profesor->identidad}} </td>
            <td scope="col">{{ $profesor->telefono}} </td>
            <td scope="col">{{ $profesor->direccion}} </td>
            <td scope="col">{{ $profesor->correo}} </td>
            <td scope="col">{{ $profesor->hora_entrada}} </td>
            <td scope="col">{{ $profesor->hora_salida}} </td>
        </tr>
        @empty
        <tr>
            <th scope="row">No hay profesores</th>
        </tr>
        @endforelse
        
    </tbody>
</table>
<h1>Alumnos Matriculados En El Grado</h1>
<table class="table">
    <thead class="table-secondary">
        <tr>
            <th scope="col">Primer Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Jornada</th>
        </tr>  
    </thead>
    <tbody>
        @forelse ($grados->alumnos as $alumno)
        <tr>
            <td scope="col">{{ $alumno->primer_nombre}} </td>
            <td scope="col">{{ $alumno->primer_apellido}} </td>
            <td scope="col">{{ $alumno->edad}} </td>
            <td scope="col">{{ $alumno->telefono}} </td>
            <td scope="col">{{ $alumno->direccion}} </td>
            <td scope="col">{{ $alumno->jornada}} </td>            
        </tr>
        @empty
        <tr>
            <th scope="row">No hay profesores</th>
        </tr>
        @endforelse
        
    </tbody>
</table>



<a class="btn btn-primary" href="{{route('grado.index')}}"> Volver </a>

@endsection 
