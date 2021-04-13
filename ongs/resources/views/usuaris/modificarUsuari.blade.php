<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Modificar Usuari</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
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
            p {
                margin-left: 20px;
                color: grey;
            }
        </style>
    </head>
    <body>
        <h1>Modificar usuari</h1>
        <form action="{{ route ('usuaris.edit', $usuaris[0]->nom_usuari)}}" method = "GET">
            {{csrf_field()}}
            <div class="form-floating">
                <input value = '' class="form-control" id="passwd" type="password" placeholder="Contrasenya" name="contrasenya">
                <label class="labeltext" for="passwd">Nova contrasenya</label>
                <p>Deixar en blanc si no es vol canviar</p>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $usuaris[0]->nom; ?>' class="form-control" id="nom" type="text" placeholder="Nom" name="nom">
                <label class="labeltext" for="nom">Nom</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $usuaris[0]->cognoms; ?>' class="form-control" id="cognoms" type="text" placeholder="Cognoms" name="cognoms">
                <label class="labeltext" for="cognoms">Cognoms</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $usuaris[0]->email; ?>' class="form-control" id="comarca" type="email" placeholder="Email" name="email">
                <label class="labeltext" for="email">Correu electrònic</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $usuaris[0]->mobil; ?>' class="form-control" id="mobil" type="text" placeholder="Mòbil" name="mobil">
                <label class="labeltext" for="mobil">Telèfon mòbil</label>
            </div>
            @if(\Session::has('admin'))
                @if($usuaris[0]->administrador)
                <div class="form-check">
                <input checked class="form-check-input" type="checkbox" id="admin" name="administrador">
                    <label class="form-check-label" for="admin">
                        Administrador
                    </label>
                </div>
                @else
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="admin" name="administrador">
                    <label class="form-check-label" for="admin">
                        Administrador
                    </label>
                </div>
                @endif
            @endif
            <input class="btn btn-primary" value="Modifica" type="submit">
            <input class="btn btn-danger" value="Reset" type="reset">
        </form>
    </body>
</html>