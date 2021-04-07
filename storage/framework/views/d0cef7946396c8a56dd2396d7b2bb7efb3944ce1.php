<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Formulari per afegir dades a la taula ongs de la base de dades ongs</title>
    <font face="Arial">
      <?php if(\Session::has('Exit')): ?>
        <div class="alert alert-success">
          <p><?php echo e(\Session::get('Exit')); ?></p>
        </div>
      <?php endif; ?>
      <form action="<?php echo e(url('Ong')); ?>" method="POST">
      <?php echo e(csrf_field()); ?>

        <br>
        <b>Introudeix les dades de la ong:<br><br>
        </b>
        Cif ong:
        <input type="text" name="CIF">
        <br>
        Nom:
        <input type="text" name="nom">
        <br>
        Adresa:
        <input type="text" name="adresa">
        <br>
        Poblacio:
        <input type="text" name="poblacio">
        <br>
        Comarca:
        <input type="text" name="comarca">
        <br>
        Tipus:
        <input type="text" name="tipus">
        <br>
        utilitat_publica:
        <input type="boolean" name="utilitat_publica">
        <br>
        <br><br>
        <input value="Envia dades" type="submit">
      </form>
    </font>
  </body>
</html>


<?php /**PATH /var/www/html/ongs/resources/views/ong/afegeixOng.blade.php ENDPATH**/ ?>