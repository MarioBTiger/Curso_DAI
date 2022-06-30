@extends('layouts.layout')
@section('content')
<title>Peliculas</title>
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Peliculas</h3></div>
          <div class="pull-right">
            <div class="btn">
              <a href="{{ route('pelicula.create') }}" class="btn btn-info" >Añadir Pelicula</a>
              <a href="{{ route('dashboard') }}" class="btn btn-info" >Regresar</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Director</th>
               <th>Genero</th>
               <th>Artista 1</th>
               <th>Artista 2</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($peliculas->count())  
              @foreach($peliculas as $row)  
              <tr>
                <td>{{$row->nombre}}</td>
                <td>{{$row->director}}</td>
                <td>{{$row->genero}}</td>
                <td>{{$row->artista1}}</td>
                <td>{{$row->artista2}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('App\Http\Controllers\PeliculaController@edit', $row->pelicula_id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('App\Http\Controllers\PeliculaController@destroy', $row->pelicula_id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $peliculas->links() }}
    </div>
  </div>
</section>

@endsection