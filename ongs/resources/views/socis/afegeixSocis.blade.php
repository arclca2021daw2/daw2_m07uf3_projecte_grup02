<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    <style>
      input[type="text"], input[type="number"], input[type="email"], input[type="date"] {
        width: 400px !important;
        margin-bottom: 1%;
        margin-left: 20px;
      }
      .labeltext, h4 {
        margin-left: 20px;
      }
      h1 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Afegir soci</title>
      <form action="{{url('socis')}}" method="POST">
        {{csrf_field()}}
        <h1>Afegir Soci</h1>
        <div class="form-floating">
          <input class="form-control" id="NIF" type="text" placeholder="NIF" name="NIF">
          <label class="labeltext" for="NIF">NIF</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="nom_cognoms" type="text" placeholder="Nom i cognoms" name="nom_cognoms">
          <label class="labeltext" for="nom_cognoms">Nom i cognoms</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="adresa" type="text" placeholder="Adreça" name="adresa">
          <label class="labeltext" for="adresa">Adreça</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="poblacio" type="text" placeholder="Població" name="poblacio">
          <label class="labeltext" for="poblacio">Població</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="comarca" type="text" placeholder="Comarca" name="comarca">
          <label class="labeltext" for="comarca">Comarca</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="tel_fixe" type="text" placeholder="Telèfon fixe" name="tel_fixe">
          <label class="labeltext" for="tel_fixe">Telèfon fixe</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="tel_mobil" type="text" placeholder="Telèfon mòbil" name="tel_mobil">
          <label class="labeltext" for="tel_mobil">Telèfon mòbil</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="email" type="email" placeholder="Correu electrònic" name="email">
          <label class="labeltext" for="email">Correu electrònic</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="data_alta" type="date" placeholder="Data d'alta" name="data_alta">
          <label class="labeltext" for="data_alta">Data d'alta</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="quota_mensual" type="number" placeholder="Quouta mensual" name="quota_mensual">
          <label class="labeltext" for="quota_mensual">Quota mensual</label>
        </div>
        <div class="form-floating">
          <input class="form-control" id="aportacio_anual" type="number" placeholder="Aportació anual" name="aportacio_anual">
          <label class="labeltext" for="aportacio_anual">Aportació anual</label>
        </div>
        <h4>Ongs:</h4>
        @foreach($ongs as $ong)
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="{{$ong->CIF}}">
            <label class="form-check-label" name="{{$ong->CIF}}" for="{{$ong->CIF}}">
              {{$ong->nom}}
            </label>
          </div>
        @endforeach
        <input class="btn btn-primary" value="Crear soci" type="submit">
        <input class="btn btn-danger" value="Reset" type="reset">
      </form>
  </body>
</html>
