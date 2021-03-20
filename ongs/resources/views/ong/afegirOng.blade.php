<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Afegir ONG</title>
    <font face="Arial">
      @if(\Session::has('Exit'))
        <div class="alert alert-success">
          <p>{{\Session::get('Exit')}}</p>
        </div>
      @endif
      <form action="{{url('ong')}}" method="POST">
      {{csrf_field()}}
        <br>
        <b>Dades ONG:<br><br></b>
        CIF<input type="text" name="cif"><br>
        Nom<input type="text" name="nom"><br>
        Adreça<input type="text" name="adresa"><br>
        Població<input type="text" name="poblacio"><br>
        Comarca<input type="text" name="comarca"><br>
        Tipus<input type="text" name="tipus"><br>
        Utilitat pública<input type="radio" name="utilitat_publica"><br><br>
        <input value="Envia dades" type="submit">
      </form>
    </font>
  </body>
</html>