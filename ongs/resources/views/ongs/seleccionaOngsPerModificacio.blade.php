<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Llista ONGS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
        @if(\Session::has('Exit'))
            <div class="alert alert-success">
                <p>{{\Session::get('Exit')}}</p>
            </div>
        @endif
        <h1>Llista ONGS</h1>
        @if(count($ongs) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">CIF</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adreça</th>
                        <th scope="col">Població </th>
                        <th scope="col">Comarca</th>
                        <th scope="col">Tipus</th>
                        <th scope="col">Utilitat pública</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Esborrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ongs as $ong) 
                        <?php
                            $ut = 'No';
                            if ($ong->utilitat_publica == 1) {
                                $ut = 'Sí';
                            }
                        ?>
                        <tr>
                            <th scope="row">{{ $loop->index+1}}</th>
                            <td>{{ $ong->CIF}}</td>
                            <td>{{ $ong->nom}}</td>
                            <td>{{ $ong->adresa}}</td>
                            <td>{{ $ong->poblacio}}</td>
                            <td>{{ $ong->comarca}}</td>
                            <td>{{ $ong->tipus}}</td>
                            <td><?php echo $ut ?></td>
                            <td><a href = 'modifong/{{ $ong->CIF }}'>Modificar</a></td>
                            <td><a href = 'esbong/{{ $ong->CIF }}'>Esborrar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route ('ongs.create') }}"> Afegir </a>
        @else
            <div class="alert alert-warning" role="alert">
                No hi ha cap ONG a la base de dades
            </div>
            <a class="btn btn-primary" href="{{ route ('ongs.create') }}"> Afegir </a>
        @endif
    </body>
</html>