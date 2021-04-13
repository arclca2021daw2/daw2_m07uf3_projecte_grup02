<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Modificar soci</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
        <style>
            input[type="text"], input[type="date"], input[type="email"], input[type="number"] {
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
            p {
                margin-left: 20px;
                color: grey;
            }
        </style>
    </head>
    <body>
        <h1>Modificar soci</h1>
        <form action = "{{ route ('socis.edit', $soci[0]->NIF)}}" method = "GET">
        {{csrf_field()}}
            <div class="form-floating">
                <input value = '{{$soci[0]->nom_cognoms}}' class="form-control" id="nom_cognoms" type="text" placeholder="Nom i cognoms" name="nom_cognoms">
                <label class="labeltext" for="nom_cognoms">Nom i cognoms</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->adresa}}' class="form-control" id="adresa" type="text" placeholder="Adreça" name="adresa">
                <label class="labeltext" for="adresa">Adreça</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->poblacio}}' class="form-control" id="poblacio" type="text" placeholder="Població" name="poblacio">
                <label class="labeltext" for="poblacio">Població</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->comarca}}' class="form-control" id="comarca" type="text" placeholder="Comarca" name="comarca">
                <label class="labeltext" for="comarca">Comarca</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->tel_fixe}}' class="form-control" id="tel_fixe" type="text" placeholder="Telèfon fixe" name="tel_fixe">
                <label class="labeltext" for="tel_fixe">Telèfon fixe</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->tel_mobil}}' class="form-control" id="tel_mobil" type="text" placeholder="Telèfon mòbil" name="tel_mobil">
                <label class="labeltext" for="tel_mobil">Telèfon mòbil</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->email}}' class="form-control" id="email" type="email" placeholder="Correu electrònic" name="email">
                <label class="labeltext" for="email">Correu electrònic</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->data_alta}}' class="form-control" id="data_alta" type="date" placeholder="Data d'alta" name="data_alta">
                <label class="labeltext" for="data_alta">Data d'alta</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->quota_mensual}}' step="any" class="form-control" id="quota_mensual" type="number" placeholder="Quota mensual" name="quota_mensual">
                <label class="labeltext" for="quota_mensual">Quota mensual</label>
            </div>
            <div class="form-floating">
                <input value = '{{$soci[0]->aportacio_anual}}' step="any" class="form-control" id="aportacio_anual" type="number" placeholder="Aportació anual" name="aportacio_anual">
                <label class="labeltext" for="aportacio_anual">Aportació anual</label>
            </div>
            <input class="btn btn-primary" value="Modifica" type="submit">
            <input class="btn btn-danger" value="Reset" type="reset">            
            <a href="{{ route ('socis.index')}}" class="btn btn-secondary">Tornar</a>
        </form>
    </body>
</html>