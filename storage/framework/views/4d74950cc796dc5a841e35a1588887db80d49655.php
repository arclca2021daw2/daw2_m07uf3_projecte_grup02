<?php $__env->startSection('content'); ?>

<h1>Aplicació d'administració treballadors_voluntaris</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou treballador_voluntari
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
      <form method="post" action="<?php echo e(route('treballadors_voluntaris.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="NIF">NIF</label>
              <input type="text" class="form-control" name="NIF"/>
          </div>
          <div class="form-group">
              <label for="edat">edat</label>
              <input type="text" class="form-control" name="edat"/>
          </div>
          <div class="form-group">
              <label for="professio">professio</label>
              <input type="text" class="form-control" name="professio"/>
          </div>
          <div class="form-group">
              <label for="hores">hores</label>
              <input type="text" class="form-control" name="hores"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="<?php echo e(url('treballadors_voluntaris')); ?>">Accés directe a la Llista treballadors_voluntaris</a>
<a href="<?php echo e(url('treballadors_voluntaris')); ?>">Accés directe a la Llista de treballadors_voluntaris</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/welcometreballadors_voluntaris.blade.php ENDPATH**/ ?>