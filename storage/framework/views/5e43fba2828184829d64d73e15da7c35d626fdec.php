<?php $__env->startSection('content'); ?>

<h1>Llista treballadors voluntariis</h1>
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
          <td>edat</td>
          <td>professio</td>
          <td>hores</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $treballadors_voluntaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treballador_voluntari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($treballador_voluntari->NIF); ?></td>
            <td><?php echo e($treballador_voluntari->edat); ?></td>  
            <td><?php echo e($treballador_voluntari->professio); ?></td> 
            <td><?php echo e($treballador_voluntari->hores); ?></td>  
            <td class="text-left">
                <a href="<?php echo e(route('treballadors_voluntaris.edit', $treballador_voluntari->NIF)); ?>" class="btn btn-success btn-sm">Edita</a>
                <form action="<?php echo e(route('treballadors_voluntaris.destroy', $treballador_voluntari->NIF)); ?>" method="post" style="display: inline-block">
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
<br><a href="<?php echo e(url('treballadors_voluntaris/create')); ?>">Accés directe a la vista de creació de treballadors voluntaris</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/indextreballadors_voluntaris.blade.php ENDPATH**/ ?>