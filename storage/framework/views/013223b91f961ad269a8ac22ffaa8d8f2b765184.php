<?php $__env->startSection('content'); ?>

<h1>Aplicació d'administració socis_ongs</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou soci_ong
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
      <form method="post" action="<?php echo e(route('socis_ongs.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="CIF_ONG">CIF_ONG</label>
              <input type="text" class="form-control" name="CIF_ONG"/>
          </div>
          <div class="form-group">
              <label for="NIF_soci">NIF_soci</label>
              <input type="text" class="form-control" name="NIF_soci"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="<?php echo e(url('socis_ongs')); ?>">Accés directe a la Llista d'empleats</a>
<a href="<?php echo e(url('treballadors')); ?>">Accés directe a la Llista de treballadors</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/welcomesocisongs.blade.php ENDPATH**/ ?>