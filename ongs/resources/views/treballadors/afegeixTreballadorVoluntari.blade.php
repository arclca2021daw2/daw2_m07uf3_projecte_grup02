<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    <title>Afegir Treballador</title>
    <style>
      input[type="text"], input[type="number"], input[type="email"], input[type="date"], select {
        width: 400px !important;
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
        <form action="{{url('treballadors')}}" method="POST">
          {{csrf_field()}}
          <h1>Afegir Treballador Voluntari</h1>
          <input type="text" value="voluntari" name="voluntari" hidden>
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
            <input class="form-control" id="data_ingres" type="date" placeholder="Data d'ingrés" name="data_ingres">
            <label class="labeltext" for="data_ingres">Data d'ingrés</label>
          </div>
          <label class="labeltext" for="CIF_ong">ONG</label>
          <select name="CIF_ong" id="CIF_ong" class="form-select" aria-label="Default select example">
            @foreach ($ongs as $ong)
              <option value="{{$ong->CIF}}">{{$ong->nom}}</option>
            @endforeach
          </select>
          <div class="form-floating">
            <input class="form-control" id="edat" type="number" placeholder="Edat" name="edat">
            <label class="labeltext" for="edat">Edat</label>
          </div>
          <div class="form-floating">
            <input class="form-control" id="professio" type="text" placeholder="Professió" name="professio">
            <label class="labeltext" for="professio">Professió</label>
          </div>
          <div class="form-floating">
            <input class="form-control" id="hores" type="number" placeholder="Hores" name="hores">
            <label class="labeltext" for="hores">Hores</label>
          </div>
          <input class="btn btn-primary" value="Crear treballador" type="submit">
          <input class="btn btn-danger" value="Reset" type="reset">
          <a href="{{ route ('treballadors.index')}}" class="btn btn-secondary">Tornar</a>
        </form>
      
  </body>
</html>
