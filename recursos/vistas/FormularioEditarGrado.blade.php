@extends('Plantillas.plantilla')
@section('titulo', 'Formulario Editar Grados')
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
        <label for="grado">Grado</label>
        <input type="text" class="form-control" name="grado" id="grado" placeholder="grado"
        value="{{$grados->grado}}">
    </div>

    <div class="form-group">
        <label for="seccion"> Seccion </label>
        <input type="text" class="form-control" name="seccion" id="seccion" placeholder="seccion" 
        value="{{$grados->seccion}}">
    </div>

    <div class="form-group">
        <label for="aula"> Aula </label>
        <input type="text" class="form-control" name="aula" id="aula" placeholder=""
        value="{{$grados->aula}}">
    </div>

    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger"> 
</form>  

@endsection


