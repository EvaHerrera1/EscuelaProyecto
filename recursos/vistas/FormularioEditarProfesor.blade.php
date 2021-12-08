@extends('Plantillas.plantilla')
@section('titulo', 'Formulario Profesor')
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
        value="{{$profesors->primer_nombre}}">
    </div>

    <div class="form-group">
        <label for="primer_apellido"> Primer Apellido </label>
        <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido" 
        value="{{$profesors->primer_apellido}}">
    </div>

    <div class="form-group">
        <label for="telefono"> Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="0000-0000"
        value="{{$profesors->telefono}}">
    </div>

    <div class="form-group">
        <label for="identidad"> Identidad</label>
        <input type="number" class="form-control" name="identidad" id="identidad" placeholder=" "
        value="{{$profesors->identidad}}">
    </div>

    
    <div class="form-group">
        <label for="direccion">Direccion </label>
        <input type="text" class="form-control" name="direccion" id="direccion" placeholder=""
        value="{{$profesors->direccion}}">
    </div>

    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="text" class="form-control" name="correo" id="correo" placeholder="example@unah.edu.hn"
        value="{{$profesors->correo}}">
    </div>

    <div class="form-group">
        <label for="hora_entrada">Hora De Entrada</label>
        <input type="text" class="form-control" name="hora_entrada" id="hora_entrada" placeholder="00:00:00"
        value="{{$profesors->hora_entrada}}">
    </div>

    <div class="form-group">
        <label for="hora_salida">Hora De Salida</label>
        <input type="text" class="form-control" name="hora_salida" id="hora_salida" placeholder="00:00:00"
        value="{{$profesors->hora_salida}}">
    </div>


    <br>
    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger"> 
</form>  

@endsection
