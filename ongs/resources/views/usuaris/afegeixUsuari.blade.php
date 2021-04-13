<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    <title>Afegir Usuari</title>
    <style>
      input[type="text"], input[type="password"], input[type="email"] {
        width: 400px;
        margin-bottom: 1%;
        margin-left: 20px;
      }
      .labeltext {
        margin-left: 20px;
      }
      h1 {
        text-align: center;
      }
    </style>
  </head>
  <body>
        <form action="{{url('usuaris')}}" method="POST">
          {{csrf_field()}}
          <h1>Afegir Usuari</h1>
          <div class="form-floating">
            <input class="form-control" id="username" type="text" placeholder="Nom d'usuari" name="nom_usuari">
            <label class="labeltext" for="username">Nom d'usuari</label>
          </div>
          <div class="form-floating">
            <input class="form-control" id="passwd" type="password" placeholder="Contrasenya" name="contrasenya">
            <label class="labeltext" for="passwd">Contrasenya</label>
          </div>
          <div class="form-floating">
            <input class="form-control" id="nom" type="text" placeholder="Nom" name="nom">
            <label class="labeltext" for="nom">Nom</label>
          </div>
          <div class="form-floating">
            <input class="form-control" id="cognoms" type="text" placeholder="Cognoms" name="cognoms">
            <label class="labeltext" for="cognoms">Cognoms</label>
          </div>
          <div class="form-floating">
            <input class="form-control" id="email" type="email" placeholder="Email" name="email">
            <label class="labeltext" for="email">Correu electrònic</label>
          </div>
          <div class="form-floating">
            <input class="form-control" id="mobil" type="text" placeholder="Mòbil" name="mobil">
            <label class="labeltext" for="mobil">Telèfon mòbil</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="admin" name="administrador">
            <label class="form-check-label" for="admin">
              Administrador
            </label>
          </div>
          <input class="btn btn-primary" value="Crear usuari" type="submit">
          <input class="btn btn-danger" value="Reset" type="reset">
          <a href="{{ route ('usuaris.index')}}" class="btn btn-secondary">Tornar</a>
        </form>
      
  </body>
</html>
