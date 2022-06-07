<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

        //Lista de estudiantes
        public function index(){
            $data['ests'] = estudiante::paginate();
    
            return view('estudiantes.listar', $data);
        }
    
        //Formulario de estudiantes
        public function getCrear(){
            return view('estudiantes.estform');
        }
    
        //Guardar estudiantes
        public function postCrear(Request $request){
            $validator = $this->validate($request, [
                'nombres'=>'required|string|max:200',
                'apellidos'=>'required|string|max:200',
                'email'=>'required|string|max:200|email|unique:estudiantes'
            ]);
            $estudiantedata = request()->except('_token');
            estudiante::insert($estdata);
    
            return back()->with('estudianteGuardado','Estudiante guardado');
        }
    
        //Eliminar estudiantes
        public function postEliminar($id) {
            estudiante::destroy($id);
    
            return back()->with('estudianteEliminado','Estudiante eliminado');
        }
    
        //Formulario para editar estudiantes
        public function getActualizar($id) {
            $estudiante = estudiante::findOrFail($id);
    
            return view('estudiantes.editform', compact('estudiante'));
        }
    
        //Edicion de estudiantes
        public function postActualizar(Request $request, $id) {
            $datosEstudiante = request()->except((['_token', '_method']));
            estudiante::where('id', '=', $id)->update($datosEstudiante);
    
            return back()->with('estudianteModificado','Estudiante modificado');
        }

    public function missingMethod($parameters=array())
    {
        abort(404);
    }
}
