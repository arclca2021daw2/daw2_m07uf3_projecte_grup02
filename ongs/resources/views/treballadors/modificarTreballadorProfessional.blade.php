<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Modificar Treballador</title>
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
        <h1>Modificar treballador</h1>
        <form action="{{ route ('treballadors.edit', [$treballador[0]->NIF, 'professional'])}}" method = "GET">
            {{csrf_field()}}
            <input type="text" value="professional" name="professional" hidden>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->nom_cognoms; ?>' class="form-control" id="nom_cognoms" type="text" placeholder="Nom i cognoms" name="nom_cognoms">
                <label class="labeltext" for="nom_cognoms">Nom i cognoms</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->adresa; ?>' class="form-control" id="adresa" type="text" placeholder="Adreça" name="adresa">
                <label class="labeltext" for="adresa">Adreça</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->poblacio; ?>' class="form-control" id="poblacio" type="text" placeholder="Població" name="poblacio">
                <label class="labeltext" for="poblacio">Població</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->comarca; ?>' class="form-control" id="comarca" type="text" placeholder="Comarca" name="comarca">
                <label class="labeltext" for="comarca">Comarca</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->tel_fixe; ?>' class="form-control" id="tel_fixe" type="text" placeholder="Telèfon fixe" name="tel_fixe">
                <label class="labeltext" for="tel_fixe">Telèfon fixe</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->tel_mobil; ?>' class="form-control" id="tel_mobil" type="text" placeholder="Telèfon mòbil" name="tel_mobil">
                <label class="labeltext" for="tel_mobil">Telèfon mòbil</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->email; ?>' class="form-control" id="email" type="email" placeholder="Correu electrònic" name="email">
                <label class="labeltext" for="email">Correu electrònic</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->data_ingres; ?>' class="form-control" id="data_ingres" type="date" placeholder="Data d'ingrés" name="data_ingres">
                <label class="labeltext" for="data_ingres">Data d'ingrés</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->carrec; ?>' class="form-control" id="carrec" type="text" placeholder="Càrrec" name="carrec">
                <label class="labeltext" for="carrec">Càrrec</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->quantitat_SS; ?>' class="form-control" id="quantitat_SS" type="number" placeholder="Quantitat Seguretat Social" name="quantitat_SS">
                <label class="labeltext" for="quantitat_SS">Quantitat Seguretat Social</label>
            </div>
            <div class="form-floating">
                <input value = '<?php echo $treballador[0]->percentatge_irpf; ?>' class="form-control" id="percentatge_irpf" type="number" placeholder="Percentatge IRPF" name="percentatge_irpf">
                <label class="labeltext" for="percentatge_irpf">Percentatge IRPF</label>
            </div>
            <input class="btn btn-primary" value="Modifica" type="submit">
            <input class="btn btn-danger" value="Reset" type="reset">
        </form>
    </body>
</html>