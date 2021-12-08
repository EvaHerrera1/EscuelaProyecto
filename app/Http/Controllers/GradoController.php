<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Grado;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGradoRequest;
use App\Http\Requests\UpdateGradoRequest;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //FUNCION PARA LEER
    public function index(){
        $grado =Grado::paginate(10);
        
        return view ('Grados')->with('grados', $grado);


    }

    //FUNCION PARA BUSCAR
    public function show($id){
        $grado = Grado::findOrFail($id);
        $Profesor = Grado::find($id);
        $Profesor->profesors;
        $Alumnos = Grado::find($id);
        $Alumnos->alumnos;
        return view ('GradoIndividual', compact('Profesor', 'Alumnos'))->with('grados', $grado);
    }

     //FUNCION PARA INSERTAR DATOS
    public function crear(){
        return view ('FormularioGrado');
    }


    //FUNCION PARA EDITAR LOS DATOS
    public function edit($id){
        $grado = Grado::findorfail($id);
        return view ('FormularioEditarGrado')->with('grados', $grado);

    } 



            //FUNCION PARA CREAR LOS DATOS
            public function store(Request $request){

                //VALIDAR LOS CAMPOS
               $request->validate([
                'grado'=>'required | numeric',
                'seccion'=>'required | alpha',
                'aula'=>'required | numeric',
                
               ]);

                //SE CREA EL OBJETO
               $nuevoGrado = new Grado();
       
                //FORMULARIO
              $nuevoGrado->grado=$request->input('grado');
              $nuevoGrado->seccion=$request->input('seccion');
              $nuevoGrado->aula=$request->input('aula');
              
               
           
        
                //PARA VERIFICAR SI SE CREO CORRECTAMENTE
               $creado = $nuevoGrado->save();
       
               if ($creado){
                return redirect('/Grados/')->with('mensaje', 'El Grado fue creado exitosamente');
               // return redirect()->route('alumno.index')->with('mensaje', 'El Alumno fue creado exitosamente');
               //} else {
                   //Retornar con un mensaje de error
               }
           }




    
        //FUNCION PARA ACTUALIZAR LOS DATOS
        public function update(Request $request, $id){

            //VALIDAR LOS CAMPOS
           $request->validate([
            'grado'=>'required | numeric',
            'seccion'=>'required | alpha',
            'aula'=>'required | numeric',
              

           ]);
   
           $grado = Grado::findorfail($id);
   
            //FORMULARIO
            $grado->grado=$request->input('grado');
            $grado->seccion=$request->input('seccion');
            $grado->aula=$request->input('aula');
           
       
    
            //PARA VERIFICAR SI SE CREO CORRECTAMENTE
           $creado = $grado->save();
   
           if ($creado){
            return redirect('/Grados/')->with('mensaje', 'El Grado fue modificado exitosamente');
               //return redirect()->route('alumno.index')->with('mensaje', 'El Alumno fue modificado exitosamente');
           //} else {
               //Retornar con un mensaje de error
           }
       }

    public function destroy($id){
        Grado::destroy($id);

        //REDIRIGIR A LA RUTA ESTUDIANTE
        return redirect('/Grados/')->with('mensaje', 'Grado borrado completamente');
    }


}
