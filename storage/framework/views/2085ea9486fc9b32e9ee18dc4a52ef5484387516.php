<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Visualitza dades Socis</title>
    </head>
    <body>
        <?php if(\Session::has('Exit')): ?>
            <div class="alert alert-success">
                <p><?php echo e(\Session::get('Exit')); ?></p>
            </div>
        <?php endif; ?>
        <table border = "1">
            <tr>
                <td>NIF</td>
                <td>nom_cognoms </td>
                <td> Adresa </td>
                <td>Poblacio </td>
                <td>Comarca </td>
                <td>tel_fixe </td>
                <td>tel_mobil </td>
                <td>email </td>
                <td>data_alta </td>
                <td>quota_mensual </td>
                <td>aportacio_anual </td>
            </tr>
            <?php $__currentLoopData = $socis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soci): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr>
                    <td><?php echo e($soci->NIF); ?></td>
                    <td><?php echo e($soci->nom_cognoms); ?></td>
                    <td><?php echo e($soci->adresa); ?></td>
                    <td><?php echo e($soci->poblacio); ?></td>
                    <td><?php echo e($soci->comarca); ?></td>
                    <td><?php echo e($soci->tel_fixe); ?></td>
                    <td><?php echo e($soci->tel_mobil); ?></td>
                    <td><?php echo e($soci->email); ?></td>
                    <td><?php echo e($soci->data_alta); ?></td>
                    <td><?php echo e($soci->quota_mensual); ?></td>
                    <td><?php echo e($soci->aportacio_anual); ?></td>
                    <td><a href = 'esbsoci/<?php echo e($soci->NIF); ?>'>Esborra</a></td>               
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>
</html><?php /**PATH /var/www/html/ongs/resources/views/socis/esborraSocis.blade.php ENDPATH**/ ?>