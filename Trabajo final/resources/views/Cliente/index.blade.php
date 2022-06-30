@extends('layouts.layout')
@section('content')
<title>Clientes</title>
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Clientes</h3></div>
          <div class="pull-right">
            <div class="btn">
              <a href="{{ route('cliente.create') }}" class="btn btn-info" >Añadir Cliente</a>
              <a href="{{ route('dashboard') }}" class="btn btn-info" >Regresar</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido Paterno</th>
               <th>Apellido materno</th>
               <th>Fecha de nacimiento</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($clientes->count())  
              @foreach($clientes as $row)  
              <tr>
                <td>{{$row->nombre}}</td>
                <td>{{$row->apellido_paterno}}</td>
                <td>{{$row->apellido_materno}}</td>
                <td>{{$row->fecha_nacimiento}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('App\Http\Controllers\ClienteController@edit', $row->cliente_id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('App\Http\Controllers\ClienteController@destroy', $row->cliente_id)}}" method="post">
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
      {{ $clientes->links() }}
    </div>
  </div>
</section>

@endsection