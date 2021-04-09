<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Modificar ONG</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
        <style>
            input[type="text"] {
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
        <form action="{{route ('ongs.edit', $ongs[0]->CIF)}}" method = "get">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <div class="form-floating">
                <input value = '<?php echo $ongs[0]->nom; ?>' class="form-control" id="nom" type="text" placeholder="Nom" name="nom">
                <label class="labeltext" for="nom">Nom</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $ongs[0]->adresa; ?>' class="form-control" id="adresa" type="text" placeholder="Adreça" name="adresa">
                <label class="labeltext" for="adresa">Adreça</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $ongs[0]->poblacio; ?>' class="form-control" id="poblacio" type="text" placeholder="Població" name="poblacio">
                <label class="labeltext" for="poblacio">Població</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $ongs[0]->comarca; ?>' class="form-control" id="comarca" type="text" placeholder="Comarca" name="comarca">
                <label class="labeltext" for="comarca">Comarca</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $ongs[0]->tipus; ?>' class="form-control" id="tipus" type="text" placeholder="tipus" name="tipus">
                <label class="labeltext" for="tipus">Tipus</label>
            </div>
            @if($ongs[0]->utilitat_publica == 1)
            <div class="form-check">
            <input checked class="form-check-input" type="checkbox" id="utilitat_publica" name="utilitat_publica">
                <label class="form-check-label" for="utilitat_publica">
                Utilitat pública
                </label>
            </div>
            @else
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="utilitat_publica" name="utilitat_publica">
                <label class="form-check-label" for="utilitat_publica">
                Utilitat pública
                </label>
            </div>
            @endif
            <input class="btn btn-primary" value="Modifica" type="submit">
            <input class="btn btn-danger" value="Reset" type="reset">
        </form>
    </body>
</html>