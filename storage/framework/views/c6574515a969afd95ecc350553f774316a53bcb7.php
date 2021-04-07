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
      <form action="<?php echo e(url('ongs')); ?>" method="POST">
      <?php echo e(csrf_field()); ?>

        <br>
        <b>Introudeix les dades del nou alumne:<br><br>
        </b>
       CIF:
        <input type="text" name="CIF">
        <br>
        nom:
        <input type="text" name="nom">
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
        tipus:
        <input type="text" name="tipus">
        <br>
        utilitat_publica:
        <input type="text" name="utilitat_publica">
   <!--     <div>
  <input type="radio" id="TRUE" name="utilitat_publica" value="TRUE" checked>
  <label for="TRUE">TRUE</label>
</div>
<div>
  <input type="radio" id="FALSE" name="utilitat_publica" value="FALSE">
  <label for="FALSE">FALSE</label>
</div>-->
    
 

        <br><br>
        <input value="Envia dades" type="submit">
      </form>
    </font>
  </body>
</html>
<?php /**PATH /var/www/html/ongs/resources/views/ongs/afegeixOngs.blade.php ENDPATH**/ ?>