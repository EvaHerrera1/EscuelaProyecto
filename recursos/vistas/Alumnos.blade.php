@extends('Plantillas.plantilla')

@section('titulo', 'Lista De Alumnos')
@section('contenido')
    
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <h1> Alumnos <a class="btn btn-primary" href="{{route('alumno.crear')}}"> Nuevo </a>  </h1>
    {{ $alumnos->links()}}
    
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">primer_nombre</th>
                <th scope="col">primer_apellido</th>
                <th scope="col">edad</th>
                <th scope="col">telefono</th>
                <th scope="col">direccion</th>
                <th scope="col">jornada</th>
                <th scope="col">Grado id</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>  

        </thead>
        <tbody>
        @forelse ($alumnos as $alumno)
            <tr>
               
                <td scope="row">{{ $alumno->primer_nombre }}</td>
                <td scope="col">{{ $alumno->primer_apellido }} </td>
                <td scope="col">{{ $alumno->edad }}</td>
                <td scope="col">{{ $alumno->telefono }}</td>
                <td scope="col">{{ $alumno->direccion }}</td>
                <td scope="col">{{ $alumno->jornada }}</td>
                <td scope="col">{{ $alumno->grado_id }}</td>
                <td> <a class="btn btn-info" href="{{ route('alumno.mostrar',['id' => $alumno->id]) }}"> Ver </a></td>
                <td> <a class="btn btn-warning" href="{{ route('alumno.edit',['id' => $alumno->id]) }}"> Editar </a></td>
                <td>
                    <form method="POST" action="{{route ('alumno.borrar', ['id'=>$alumno->id])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            
            </tr>
        @empty
            <tr>
                <td colspan="6"> No hay estudiantes </td>
            </tr>    
        @endforelse

        </tbody>
    </table>
    
@endsection
