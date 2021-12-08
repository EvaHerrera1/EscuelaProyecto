@extends('Plantillas.plantilla')

@section('titulo', 'Formulario De GradoProfesor')

@section('contenido')

<h1> GradoProfesor </h1>

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
<h1> Seleccione el grado al que impartira clases </h1>
<form method="POST" action="">
    @csrf 
    <select  class="form-control" name="grado_id" id="grado_id" >
        @foreach($grados as $grado)

        <option value="{{$grado->id}}">{{$grado->grado}} {{$grado->seccion}}</option>

   @endforeach
    </select>
 
   <h1>Seleccione el maestro</h1>
   <select class="form-control" name="profesor_id" id="profesor_id" >
    @foreach($profesors as $profesor)
  
    <option value="{{$profesor->id}}">{{$profesor->primer_nombre}} {{$profesor->primer_apellido}}</option>

@endforeach
</select>
   

    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger"> 
</form>  

@endsection
