<?php

namespace App\Http\Controllers;

use App\Models\GradoProfesor;
use App\Models\Grado;
use App\Models\Profesor;
use Illuminate\Http\Request;

class GradoProfesorController extends Controller
{
    public function gp(){
        $grados=Grado::all();
        $profesors=Profesor::all();
        return view ('GradoProfesor')
        ->with('grados',$grados)
        ->with('profesors',$profesors);
    }

   public function store(Request $request){

    //VALIDAR LOS CAMPOS
   $request->validate([
    'grado_id'=>'required | numeric',
    'profesor_id'=>'required |numeric'
   ]);

    //SE CREA EL OBJETO
   $nuevoGradoProfesor = new GradoProfesor();

    //FORMULARIO
    $nuevoGradoProfesor->grado_id=$request->input('grado_id');
    $nuevoGradoProfesor->profesor_id=$request->input('profesor_id');
   
    //PARA VERIFICAR SI SE CREO CORRECTAMENTE
   $creado =  $nuevoGradoProfesor->save();

   if ($creado){
    return redirect('/Grados/')->with('mensaje', 'El GradoProfesor fue creado exitosamente');
   // return redirect()->route('alumno.index')->with('mensaje', 'El Alumno fue creado exitosamente');
   //} else {
       //Retornar con un mensaje de error
   }
    }
}
