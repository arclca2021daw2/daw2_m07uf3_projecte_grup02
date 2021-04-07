<?php $__env->startSection('content'); ?>

<h1>Llista treballadors professionals </h1>
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
          <td>carrec</td>
          <td>quantitat_SS</td>
          <td>percentatge_irpf</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $treballador_professionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treballador_professional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($treballador_professional->NIF); ?></td>
            <td><?php echo e($treballador_professional->carrec); ?></td>  
            <td><?php echo e($treballador_professional->quantitat_SS); ?></td> 
            <td><?php echo e($treballador_professional->percentatge_irpf); ?></td>  
            <td class="text-left">
                <a href="<?php echo e(route('treballador_professionals.edit', $treballador_professional->NIF)); ?>" class="btn btn-success btn-sm">Edita</a>
                <form action="<?php echo e(route('treballador_professionals.destroy', $treballador_professional->NIF)); ?>" method="post" style="display: inline-block">
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
<br><a href="<?php echo e(url('treballador_professionals/create')); ?>">Accés directe a la vista de creació de treballadors professionals</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/indextreballador_professional.blade.php ENDPATH**/ ?>