<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas=Pelicula::orderBy('pelicula_id','DESC')->paginate(3);
        return view('Pelicula.index',compact('peliculas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'nombre'=>'required', 'director'=>'required', 'genero'=>'required', 'artista1'=>'required', 'artista2'=>'required']);
        Pelicula::create($request->all());
        return redirect()->route('pelicula.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peliculas=Pelicula::find($id);
        return  view('pelicula.show',compact('peliculas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula=pelicula::find($id);
        return view('pelicula.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'nombre'=>'required', 'director'=>'required', 'genero'=>'required', 'artista1'=>'required', 'artista2'=>'required']);
        pelicula::find($id)->update($request->all());
        return redirect()->route('pelicula.index')->with('success','Registro actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelicula::find($id)->delete();
        return redirect()->route('pelicula.index')->with('success','Registro eliminado satisfactoriamente');
    }

    public function missingMethod($parameters=array())
    {
        abort(404);
    }
}
