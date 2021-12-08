@extends('Plantillas.plantilla')

@section('titulo', 'Lista De Profesores')
@section('contenido')
    
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <h1> Profesores <a class="btn btn-primary" href="{{route('profesor.crear')}}"> Nuevo </a>  </h1>
    {{ $profesors->links()}}
    
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Primer Nombre</th>
                <th scope="col">Primer Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Identidad</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo</th>
                <th scope="col">Hora Entrada</th>
                <th scope="col">Hora Salida</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>  

        </thead>
        <tbody>
        @forelse ($profesors as $profesor)
            <tr>
               
                <td scope="row">{{ $profesor->primer_nombre }}</td>
                <td scope="col">{{ $profesor->primer_apellido }} </td>
                <td scope="col">{{ $profesor->telefono }}</td>
                <td scope="col">{{ $profesor->identidad }}</td>
                <td scope="col">{{ $profesor->direccion }}</td>
                <td scope="col">{{ $profesor->correo }}</td>
                <td scope="col">{{ $profesor->hora_entrada }}</td>
                <td scope="col">{{ $profesor->hora_salida }}</td>
                <td> <a class="btn btn-info" href="{{ route('profesor.mostrar',['id' => $profesor->id]) }}"> Ver </a></td>
                <td> <a class="btn btn-warning" href="{{ route('profesor.edit',['id' => $profesor->id]) }}"> Editar </a></td>
                <td>
                    <form method="POST" action="{{route ('profesor.borrar', ['id'=>$profesor->id])}}">
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
