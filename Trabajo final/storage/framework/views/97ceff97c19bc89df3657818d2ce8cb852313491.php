
<?php $__env->startSection('content'); ?>
<title>Crear Renta</title>
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
			<?php if(Session::has('success')): ?>
			<div class="alert alert-info">
				<?php echo e(Session::get('success')); ?>

			</div>
			<?php endif; ?>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nueva Renta</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="<?php echo e(route('renta.store')); ?>"  role="form">
							<?php echo e(csrf_field()); ?>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="fecha_registro" id="fecha_registro" class="form-control input-sm" placeholder="Fecha del registro">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="fecha_devolucion" id="fecha_devolucion" class="form-control input-sm" placeholder="Fecha de devolucion">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control input-sm" placeholder="Fecha de entrega">
										</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="<?php echo e(route('renta.index')); ?>" class="btn btn-info btn-block" >Atrás</a>
								</div>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\3er Ciclo - C24A\Desarrollo de Aplicaciones en Internet\Clase S14 - Laravel - Parte VI\lab14 Jetstream con livewire\app\resources\views/Renta/create.blade.php ENDPATH**/ ?>