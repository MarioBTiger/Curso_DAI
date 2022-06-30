@extends('layouts.layout')
@section('content')
<title>Membresias</title>
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Membresias</h3></div>
          <div class="pull-right">
            <div class="btn">
              <a href="{{ route('membresia.create') }}" class="btn btn-info" >Añadir Renta</a>
              <a href="{{ route('dashboard') }}" class="btn btn-info" >Regresar</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Fecha de expedicion</th>
               <th>Fecha de expiracion</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($membresias->count())  
              @foreach($membresias as $row)  
              <tr>
                <td>{{$row->fecha_expedicion}}</td>
                <td>{{$row->fecha_expiracion}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('App\Http\Controllers\MembresiaController@edit', $row->membresia_id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('App\Http\Controllers\MembresiaController@destroy', $row->membresia_id)}}" method="post">
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
      {{ $membresias->links() }}
    </div>
  </div>
</section>

@endsection