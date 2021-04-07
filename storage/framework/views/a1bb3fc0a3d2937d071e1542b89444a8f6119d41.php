<?php $__env->startSection('content'); ?>

<h1>Llista socis_ong</h1>
<div class="mt-5">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div>
  <?php endif; ?>
  <table class="table">
    <thead>   
        <tr class="table-primary">
          <td>CIF_ONG</td>
          <td>NIF_soci</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $socis_ongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soci_ong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($soci_ong->CIF_ONG); ?></td>
            <td><?php echo e($soci_ong->NIF_soci); ?></td>     
            <td class="text-left">
                <a href="<?php echo e(route('socis_ongs.edit', $soci_ong->CIF_ONG)); ?>" class="btn btn-success btn-sm">Edita</a>
                <form action="<?php echo e(route('socis_ongs.destroy', $soci_ong->CIF_ONG)); ?>" method="post" style="display: inline-block">
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
<br><a href="<?php echo e(url('socis_ongs/create')); ?>">Accés directe a la vista de creació d'empleats</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/indexsocisongs.blade.php ENDPATH**/ ?>