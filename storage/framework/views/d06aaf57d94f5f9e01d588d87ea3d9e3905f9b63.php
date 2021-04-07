<?php $__env->startSection('content'); ?>

<h1>Aplicació d'administració treballador_professional </h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou treballador_professional
  </div>

  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('treballador_professionals.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="NIF">NIF</label>
              <input type="text" class="form-control" name="NIF"/>
          </div>
          <div class="form-group">
              <label for="carrec">carrec</label>
              <input type="text" class="form-control" name="carrec"/>
          </div>
          <div class="form-group">
              <label for="quantitat_SS">quantitat_SS</label>
              <input type="text" class="form-control" name="quantitat_SS"/>
          </div>
          <div class="form-group">
              <label for="percentatge_irpf">percentatge_irpf</label>
              <input type="text" class="form-control" name="percentatge_irpf"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="<?php echo e(url('treballador_professionals')); ?>">Accés directe a la Llista treballadors_professionals</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/welcometreballador_professional.blade.php ENDPATH**/ ?>