<?php $__env->startSection('content'); ?>


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="<?php echo e(route('socis_ongs.update', $socis_ongs->CIF_ONG)); ?>">
            <div class="form-group">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <label for="CIF_ONG">CIF_ONG</label>
                <input type="text" class="form-control" name="CIF_ONG" value="<?php echo e($socis_ongs->CIF_ONG); ?>" />
            </div>
            <div class="form-group">
                <label for="NIF_soci">NIF_soci</label>
                <input type="text" class="form-control" name="NIF_soci" value="<?php echo e($socis_ongs->NIF_soci); ?>" />
            </div>
        

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="<?php echo e(url('socis_ongs')); ?>">Accés directe a la Llista de socis ongs</a
<?php $__env->stopSection(); ?>
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ongs/resources/views/actualitzasocisongs.blade.php ENDPATH**/ ?>