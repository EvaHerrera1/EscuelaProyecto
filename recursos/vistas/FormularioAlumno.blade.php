@extends('Plantillas.plantilla')

@section('titulo', 'Formulario De Alumno')

@section('contenido')

<h1> Alumno</h1>

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
    @csrf <!-- PARA PODER ENVIAR EL FORMULARIO -->
    <div class="form-group">
        <label for="primer_nombre"> Primer Nombre</label>
        <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" placeholder="Primer Nombre">
    </div>

    <div class="form-group">
        <label for="primer_apellido"> Primer Apellido </label>
        <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido">
    </div>

    <div class="form-group">
        <label for="edad"> Edad</label>
        <input type="number" class="form-control" name="edad" id="edad" placeholder=" ">
    </div>

    <div class="form-group">
        <label for="telefono"> Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="0000-0000">
    </div>

    <div class="form-group">
        <label for="direccion">Direccion </label>
        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="">
    </div>

    <div class="form-group">
        <label for="jornada">Jornada</label>
        <input type="text" class="form-control" name="jornada" id="jornada" placeholder="matutina, verpertina">
    </div>

    <div class="form-group">
        <label for="grado_id">Grado Id</label>
        <input type="number" class="form-control" name="grado_id" id="grado_id" placeholder="grado_id">
    </div>


    <br>
    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger"> 
</form>  

@endsection
