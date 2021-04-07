<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Formulari per afegir dades a la taula Socis de la base de dades ongs</title>
    <font face="Arial">
      <?php if(\Session::has('Exit')): ?>
        <div class="alert alert-success">
          <p><?php echo e(\Session::get('Exit')); ?></p>
        </div>
      <?php endif; ?>
      <form action="<?php echo e(url('socis')); ?>" method="POST">
      <?php echo e(csrf_field()); ?>

        <br>
        <b>Introudeix les dades del nou soci:<br><br>
        </b>
       NIF:
        <input type="text" name="NIF">
        <br>
        nom i cognoms:
        <input type="text" name="nom_cognoms">
        <br>
        adresa:
        <input type="text" name="adresa">
        <br>
        poblacio:
        <input type="text" name="poblacio">
        <br>
        comarca:
        <input type="text" name="comarca">
        <br>
        tel_fixe:
        <input type="text" name="tel_fixe">
        <br>
        tel_mobil:
        <input type="text" name="tel_mobil">
        <br>
        email:
        <input type="text" name="email">
        <br>
        data_alta:
        <input type="date" name="data_alta">
        <br>
        quota_mensual:
        <input type="text" name="quota_mensual">
        <br>
        aportacio_anual:
        <input type="text" name="aportacio_anual">
        <br><br>
        <input value="Envia dades" type="submit">
      </form>
    </font>
  </body>
</html>
<?php /**PATH /var/www/html/ongs/resources/views/socis/afegeixSocis.blade.php ENDPATH**/ ?>