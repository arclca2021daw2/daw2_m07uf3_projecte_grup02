<?php $__env->startSection('content'); ?>

<h1>Llista treballadors</h1>
<div class="mt-5">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div>
  <?php endif; ?>
  <table class="table">
    <thead>   
        <tr class="table-primary">
          <td>NIF</td>
          <td>nom_cognoms</td>
          <td>adresa</td>
          <td>poblacio</td>
          <td>comarca</td>
          <td>tel_fixe</td>
          <td>tel_mobil</td>
          <td>email</td>
          <td>data_ingres</td>
          <td>CIF_ong</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $treballadors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treballador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($treballador->NIF); ?></td>
            <td><?php echo e($treballador->nom_cognoms); ?></td>  
            <td><?php echo e($treballador->adresa); ?></td> 
            <td><?php echo e($treballador->poblacio); ?></td> 
            <td><?php echo e($treballador->comarca); ?></td> 
            <td><?php echo e($treballador->tel_fixe); ?></td> 
            <td><?php echo e($treballador->tel_mobil); ?></td> 
            <td><?php echo e($treballador->email); ?></td>    
            <td><?php echo e($treballador->data_ingres); ?></td>  
            <td><?php echo e($treballador->CIF_ong); ?></td>  
            <td class="text-left">
                <a href="<?php echo e(route('treballadors.edit', $treballador->NIF)); ?>" class="btn btn-success btn-sm">Edita</a>
                <form action="<?php echo e(route('treballadors.destroy', $treballador->NIF)); ?>" method="post" style="display: inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
<br><a href="<?php echo e(url('treballadors/create')); ?>">Accés directe a la vista de creació de treballadors</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/indextreballadors.blade.php ENDPATH**/ ?>