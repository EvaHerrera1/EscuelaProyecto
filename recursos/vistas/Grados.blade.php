@extends('Plantillas.plantilla')

@section('titulo', 'Lista De Grados')
@section('contenido')
    
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <h1> Grados <a class="btn btn-primary" href="{{route('grado.crear')}}"> Nuevo </a>  </h1>
    {{ $grados->links()}}
    
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Grado</th>
                <th scope="col">Seccion</th>
                <th scope="col">Aula</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>  

        </thead>
        <tbody>
        @forelse ($grados as $grado)
            <tr>
               
                <td scope="row">{{ $grado->grado }}</td>
                <td scope="col">{{ $grado->seccion }} </td>
                <td scope="col">{{ $grado->aula}}</td>
                <td> <a class="btn btn-info" href="{{ route('grado.mostrar',['id' => $grado->id]) }}"> Ver </a></td>
                <td> <a class="btn btn-warning" href="{{ route('grado.edit',['id' => $grado->id]) }}"> Editar </a></td>
                <td>
                    <form method="POST" action="{{route ('grado.borrar', ['id'=>$grado->id])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            
            </tr>
        @empty
            <tr>
                <td colspan="6"> No hay grados </td>
            </tr>    
        @endforelse

        </tbody>
    </table>
    
@endsection
