
<?php $__env->startSection('content'); ?>
<title>Peliculas</title>
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Peliculas</h3></div>
          <div class="pull-right">
            <div class="btn">
              <a href="<?php echo e(route('pelicula.create')); ?>" class="btn btn-info" >Añadir Pelicula</a>
              <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-info" >Regresar</a>
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
              <?php if($peliculas->count()): ?>  
              <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
              <tr>
                <td><?php echo e($row->nombre); ?></td>
                <td><?php echo e($row->director); ?></td>
                <td><?php echo e($row->genero); ?></td>
                <td><?php echo e($row->artista1); ?></td>
                <td><?php echo e($row->artista2); ?></td>
                <td><a class="btn btn-primary btn-xs" href="<?php echo e(action('App\Http\Controllers\PeliculaController@edit', $row->pelicula_id)); ?>" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="<?php echo e(action('App\Http\Controllers\PeliculaController@destroy', $row->pelicula_id)); ?>" method="post">
                   <?php echo e(csrf_field()); ?>

                   <input name="_method" type="hidden" value="DELETE">
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
               <?php else: ?>
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              <?php endif; ?>
            </tbody>

          </table>
        </div>
      </div>
      <?php echo e($peliculas->links()); ?>

    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\3er Ciclo - C24A\Desarrollo de Aplicaciones en Internet\Clase S14 - Laravel - Parte VI\lab14 Jetstream con livewire\app\resources\views/Pelicula/index.blade.php ENDPATH**/ ?>