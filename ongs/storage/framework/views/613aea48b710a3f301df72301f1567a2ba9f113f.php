<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Afegir ONG</title>
  </head>
  <body>
    <?php if(\Session::has('Exit')): ?>
        <div class="alert alert-success">
            <p><?php echo e(\Session::get('Exit')); ?></p>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(url('ong')); ?>" method="POST">
      <?php echo e(csrf_field()); ?>

      <b>Dades ONG:<br><br></b>
      CIF<input type="text" name="cif" required><br>
      Nom<input type="text" name="nom" required><br>
      Adreça<input type="text" name="adresa" required><br>
      Població<input type="text" name="poblacio" required><br>
      Comarca<input type="text" name="comarca" required><br>
      Tipus<input type="text" name="tipus" required><br>
      Utilitat pública<input type="checkbox" name="utilitat_publica"><br><br>
      <input value="Envia dades" type="submit">
    </form>
  </body>
</html><?php /**PATH /var/www/html/daw2_m07uf3_projecte_grup02/ongs/resources/views/ong/afegirOng.blade.php ENDPATH**/ ?>