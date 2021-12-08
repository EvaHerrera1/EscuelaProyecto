<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;

class ProfesorController extends Controller
{
     //FUNCION PARA LEER
     public function index(){
        $profesor =Profesor::paginate(10);
        return view ('Profesores')->with('profesors', $profesor);
    }

    //FUNCION PARA BUSCAR
    public function show($id){
        $profesor = Profesor::findorfail($id);
        return view ('ProfesorIndividual')->with('profesors', $profesor);
    }

     //FUNCION PARA INSERTAR DATOS
    public function crear(){
        return view ('FormularioProfesor');
    }


    //FUNCION PARA EDITAR LOS DATOS
    public function edit($id){
        $profesor = Profesor::findorfail($id);
        return view ('FormularioEditarProfesor')->with('profesors', $profesor);

    } 



            //FUNCION PARA CREAR LOS DATOS
            public function store(Request $request){

                //VALIDAR LOS CAMPOS
               $request->validate([
                'primer_nombre'=>'required | alpha',
                'primer_apellido'=>'required | alpha',
                'telefono'=>'required | numeric',
                'identidad'=>'required | numeric',
                'direccion'=>'required',
                'correo'=>'required',
                'hora_entrada'=>'required',
                'hora_salida'=>'required',
               ]);

                //SE CREA EL OBJETO
               $nuevoProfesor = new Profesor();
       
                //FORMULARIO
                $nuevoProfesor->primer_nombre=$request->input('primer_nombre');
                $nuevoProfesor->primer_apellido=$request->input('primer_apellido');
                $nuevoProfesor->telefono=$request->input('telefono');
                $nuevoProfesor->identidad=$request->input('identidad');
                $nuevoProfesor->direccion=$request->input('direccion');
                $nuevoProfesor->correo=$request->input('correo');
                $nuevoProfesor->hora_entrada=$request->input('hora_entrada');
                $nuevoProfesor->hora_salida=$request->input('hora_salida');
               
           
        
                //PARA VERIFICAR SI SE CREO CORRECTAMENTE
               $creado = $nuevoProfesor->save();
       
               if ($creado){
                return redirect('/Profesores/')->with('mensaje', 'El Profesor fue creado exitosamente');
               // return redirect()->route('alumno.index')->with('mensaje', 'El Alumno fue creado exitosamente');
               //} else {
                   //Retornar con un mensaje de error
               }
           }




    
        //FUNCION PARA ACTUALIZAR LOS DATOS
        public function update(Request $request, $id){

            //VALIDAR LOS CAMPOS
           $request->validate([
            'primer_nombre'=>'required | alpha',
            'primer_apellido'=>'required | alpha',
            'telefono'=>'required | numeric',
            'identidad'=>'required | numeric',
            'direccion'=>'required',
            'correo'=>'required',
            'hora_entrada'=>'required',
            'hora_salida'=>'required',
           ]);
   
           $profesor = Profesor::findorfail($id);
   
            //FORMULARIO
   
           $profesor->primer_nombre=$request->input('primer_nombre');
           $profesor->primer_apellido=$request->input('primer_apellido');
           $profesor->telefono=$request->input('telefono');
           $profesor->identidad=$request->input('identidad');
           $profesor->direccion=$request->input('direccion');
           $profesor->correo=$request->input('correo');
           $profesor->hora_entrada=$request->input('hora_entrada');
           $profesor->hora_salida=$request->input('hora_salida');
           
       
    
            //PARA VERIFICAR SI SE CREO CORRECTAMENTE
           $creado = $profesor->save();
   
           if ($creado){
            return redirect('/Profesores/')->with('mensaje', 'El Profesor fue modificado exitosamente');
               //return redirect()->route('alumno.index')->with('mensaje', 'El Alumno fue modificado exitosamente');
           //} else {
               //Retornar con un mensaje de error
           }
       }

    public function destroy($id){
        Profesor::destroy($id);

        //REDIRIGIR A LA RUTA ESTUDIANTE
        return redirect('/Profesores/')->with('mensaje', 'Profesor borrado completamente');
    }
}
