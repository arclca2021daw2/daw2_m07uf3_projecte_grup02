<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Selecciona ONG a modficar</title>
    </head>
    <body>
        <?php if(\Session::has('Exit')): ?>
            <div class="alert alert-success">
                <p><?php echo e(\Session::get('Exit')); ?></p>
            </div>
        <?php endif; ?>
        <table border = "1">
            <tr>
                <td>CIF</td>
                <td>Nom </td>
                <td>adresa </td>
                <td>Poblacio </td>
                <td>Comarca</td>
                <td>Tipus</td>
                <td>utilitat_publica</td>
            </tr>
            <?php $__currentLoopData = $ongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr>
                    <td><?php echo e($ong->CIF); ?></td>
                    <td><?php echo e($ong->nom); ?></td>
                    <td><?php echo e($ong->adresa); ?></td>
                    <td><?php echo e($ong->poblacio); ?></td>
                    <td><?php echo e($ong->comarca); ?></td>
                    <td><?php echo e($ong->tipus); ?></td>
                    <td><?php echo e($ong->utilitat_publica); ?></td>
                    <td><a href = 'modifong/<?php echo e($ong->CIF); ?>'>Selecciona per modificació</a></td>               
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>
</html><?php /**PATH /var/www/html/ongs/resources/views/ongs/seleccionaOngsPerModificacio.blade.php ENDPATH**/ ?>