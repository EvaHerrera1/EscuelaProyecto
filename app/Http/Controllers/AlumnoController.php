<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //FUNCION PARA LEER
    public function index(){
        $alumno =Alumno::paginate(10);
        return view ('Alumnos')->with('alumnos', $alumno);
        
    }

    //FUNCION PARA BUSCAR
    public function show($id){
        $alumno = Alumno::findorfail($id);
        return view ('AlumnoIndividual')->with('alumnos', $alumno);
    }

     //FUNCION PARA INSERTAR DATOS
    public function crear(){
        return view ('FormularioAlumno');
    }


    //FUNCION PARA EDITAR LOS DATOS
    public function edit($id){
        $alumno = Alumno::findorfail($id);
        return view ('FormularioEditarAlumno')->with('alumnos', $alumno);

    } 



            //FUNCION PARA CREAR LOS DATOS
            public function store(Request $request){

                //VALIDAR LOS CAMPOS
               $request->validate([
                'primer_nombre'=>'required | alpha',
                'primer_apellido'=>'required | alpha',
                'edad'=>'required | numeric',
                'telefono'=>'required | numeric',
                'direccion'=>'required',
                'jornada'=>'required',
                'grado_id'=>'required'
               ]);

                //SE CREA EL OBJETO
               $nuevoAlumno = new Alumno();
       
                //FORMULARIO
              $nuevoAlumno->primer_nombre=$request->input('primer_nombre');
              $nuevoAlumno->primer_apellido=$request->input('primer_apellido');
              $nuevoAlumno->edad=$request->input('edad');
              $nuevoAlumno->telefono=$request->input('telefono');
              $nuevoAlumno->direccion=$request->input('direccion');
              $nuevoAlumno->jornada=$request->input('jornada');
              $nuevoAlumno->grado_id=$request->input('grado_id');
               
           
        
                //PARA VERIFICAR SI SE CREO CORRECTAMENTE
               $creado = $nuevoAlumno->save();
       
               if ($creado){
                return redirect('/Alumnos/')->with('mensaje', 'El Alumno fue creado exitosamente');
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
               'edad'=>'required | numeric',
               'telefono'=>'required | numeric',
               'direccion'=>'required',
               'jornada'=>'required',
               'grado_id'=>'required'
           ]);
   
           $alumno = Alumno::findorfail($id);
   
            //FORMULARIO
           $alumno->primer_nombre=$request->input('primer_nombre');
           $alumno->primer_apellido=$request->input('primer_apellido');
           $alumno->edad=$request->input('edad');
           $alumno->telefono=$request->input('telefono');
           $alumno->direccion=$request->input('direccion');
           $alumno->jornada=$request->input('jornada');
           $alumno->grado_id=$request->input('grado_id');
           
       
    
            //PARA VERIFICAR SI SE CREO CORRECTAMENTE
           $creado = $alumno->save();
   
           if ($creado){
            return redirect('/Alumnos/')->with('mensaje', 'El Alumno fue modificado exitosamente');
               //return redirect()->route('alumno.index')->with('mensaje', 'El Alumno fue modificado exitosamente');
           //} else {
               //Retornar con un mensaje de error
           }
       }

    public function destroy($id){
        Alumno::destroy($id);

        //REDIRIGIR A LA RUTA ESTUDIANTE
        return redirect('/Alumnos/')->with('mensaje', 'Alumno borrado completamente');
    }


    
}
