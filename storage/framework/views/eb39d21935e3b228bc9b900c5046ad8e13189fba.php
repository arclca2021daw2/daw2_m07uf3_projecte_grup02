<?php $__env->startSection('content'); ?>

<h1>Aplicació d'administració de treballadors</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou treballador
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
      <form method="post" action="<?php echo e(route('treballadors.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="NIF">NIF</label>
              <input type="text" class="form-control" name="NIF"/>
          </div>
          <div class="form-group">
              <label for="nom_cognoms">nom_cognoms</label>
              <input type="text" class="form-control" name="nom_cognoms"/>
          </div>
          <div class="form-group">
              <label for="adresa">adresa</label>
              <input type="text" class="form-control" name="adresa"/>
          </div>
          <div class="form-group">
              <label for="poblacio">poblacio</label>
              <input type="text" class="form-control" name="poblacio"/>
          </div>
          <div class="form-group">
              <label for="comarca">comarca</label>
              <input type="text" class="form-control" name="comarca"/>
          </div>
          <div class="form-group">
              <label for="tel_fixe">tel_fixe</label>
              <input type="text" class="form-control" name="tel_fixe"/>
          </div>
          <div class="form-group">
              <label for="tel_mobil">tel_mobil</label>
              <input type="text" class="form-control" name="tel_mobil"/>
          </div>
          <div class="form-group">
              <label for="email">email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="data_ingres">data_ingres</label>
              <input type="date" class="form-control" name="data_ingres"/>
          </div>
          <div class="form-group">
              <label for="CIF_ong">CIF_ong</label>
              <input type="text" class="form-control" name="CIF_ong"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="<?php echo e(url('treballadors')); ?>">Accés directe a la Llista de treballadors</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/welcometreballador.blade.php ENDPATH**/ ?>