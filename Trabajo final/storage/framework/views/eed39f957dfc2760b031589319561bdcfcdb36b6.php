
<?php $__env->startSection('content'); ?>
<title>Clientes</title>
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Clientes</h3></div>
          <div class="pull-right">
            <div class="btn">
              <a href="<?php echo e(route('cliente.create')); ?>" class="btn btn-info" >Añadir Cliente</a>
              <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-info" >Regresar</a>
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
              <?php if($clientes->count()): ?>  
              <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
              <tr>
                <td><?php echo e($row->nombre); ?></td>
                <td><?php echo e($row->apellido_paterno); ?></td>
                <td><?php echo e($row->apellido_materno); ?></td>
                <td><?php echo e($row->fecha_nacimiento); ?></td>
                <td><a class="btn btn-primary btn-xs" href="<?php echo e(action('App\Http\Controllers\ClienteController@edit', $row->cliente_id)); ?>" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="<?php echo e(action('App\Http\Controllers\ClienteController@destroy', $row->cliente_id)); ?>" method="post">
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
      <?php echo e($clientes->links()); ?>

    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\3er Ciclo - C24A\Desarrollo de Aplicaciones en Internet\Clase S14 - Laravel - Parte VI\lab14 Jetstream con livewire\app\resources\views/Cliente/index.blade.php ENDPATH**/ ?>