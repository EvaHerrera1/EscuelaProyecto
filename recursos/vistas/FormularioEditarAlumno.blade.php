@extends('Plantillas.plantilla')
@section('titulo', 'Formulario De Alumno')
@section('contenido')

<h1>Alumno </h1>

<!-- PARA LOS ERRORES -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="">
    @method('put') <!-- PARA ACTUALIZAR EL FORMULARIO -->
    @csrf <!-- PARA PODER ENVIAR EL FORMULARIO -->
    <div class="form-group">
        <label for="primer_nombre">Primer Nombre</label>
        <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" placeholder="Primer Nombre"
        value="{{$alumnos->primer_nombre}}">
    </div>

    <div class="form-group">
        <label for="primer_apellido"> Primer Apellido </label>
        <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido" 
        value="{{$alumnos->primer_apellido}}">
    </div>

    <div class="form-group">
        <label for="edad"> Edad</label>
        <input type="number" class="form-control" name="edad" id="edad" placeholder=" "
        value="{{$alumnos->edad}}">
    </div>

    <div class="form-group">
        <label for="telefono"> Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="0000-0000"
        value="{{$alumnos->telefono}}">
    </div>

    <div class="form-group">
        <label for="direccion">Direccion </label>
        <input type="text" class="form-control" name="direccion" id="direccion" placeholder=""
        value="{{$alumnos->direccion}}">
    </div>

    <div class="form-group">
        <label for="jornada">Jornada</label>
        <input type="text" class="form-control" name="jornada" id="jornada" placeholder="matutina, verpertina"
        value="{{$alumnos->jornada}}">
    </div>

    <div class="form-group">
        <label for="grado_id">Grado Id</label>
        <input type="text" class="form-control" name="grado_id" id="grado_id" placeholder="grado_id"
        value="{{$alumnos->grado_id}}">
    </div>


    <br>
    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger"> 
</form>  

@endsection
