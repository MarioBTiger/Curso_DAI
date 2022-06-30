@extends('layouts.layout')
@section('content')
<title>Rentas</title>
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Rentas</h3></div>
          <div class="pull-right">
            <div class="btn">
              <a href="{{ route('renta.create') }}" class="btn btn-info" >Añadir Renta</a>
              <a href="{{ route('dashboard') }}" class="btn btn-info" >Regresar</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Fecha de registro</th>
               <th>Fecha de devolucion</th>
               <th>Fecha de entrega</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($rentas->count())  
              @foreach($rentas as $row)  
              <tr>
                <td>{{$row->fecha_registro}}</td>
                <td>{{$row->fecha_devolucion}}</td>
                <td>{{$row->fecha_entrega}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('App\Http\Controllers\RentaController@edit', $row->renta_id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('App\Http\Controllers\RentaController@destroy', $row->renta_id)}}" method="post">
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
      {{ $rentas->links() }}
    </div>
  </div>
</section>

@endsection