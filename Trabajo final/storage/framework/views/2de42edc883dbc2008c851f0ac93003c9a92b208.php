
<?php $__env->startSection('content'); ?>
<title>Membresias</title>
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Membresias</h3></div>
          <div class="pull-right">
            <div class="btn">
              <a href="<?php echo e(route('membresia.create')); ?>" class="btn btn-info" >Añadir Renta</a>
              <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-info" >Regresar</a>
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
              <?php if($membresias->count()): ?>  
              <?php $__currentLoopData = $membresias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
              <tr>
                <td><?php echo e($row->fecha_expedicion); ?></td>
                <td><?php echo e($row->fecha_expiracion); ?></td>
                <td><a class="btn btn-primary btn-xs" href="<?php echo e(action('App\Http\Controllers\MembresiaController@edit', $row->membresia_id)); ?>" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="<?php echo e(action('App\Http\Controllers\MembresiaController@destroy', $row->membresia_id)); ?>" method="post">
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
      <?php echo e($membresias->links()); ?>

    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\3er Ciclo - C24A\Desarrollo de Aplicaciones en Internet\Clase S14 - Laravel - Parte VI\lab14 Jetstream con livewire\app\resources\views/Membresia/index.blade.php ENDPATH**/ ?>