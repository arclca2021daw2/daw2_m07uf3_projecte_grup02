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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="{{URL('/images/user.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                {{\Session::get('usuari')}}
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inici</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route ('ongs.index') }}">Associacions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" aria-disabled="true">Socis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" aria-disabled="true">Treballadors</a>
                    </li>
                    @if(\Session::has('admin'))
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" aria-disabled="true">Usuaris</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="tancarsessio/{{ \Session::get('usuari') }}">
                        Tancar Sessi??
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <h1>Llista ONGS</h1>
        @if(count($ongs) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">CIF</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adre??a</th>
                        <th scope="col">Poblaci?? </th>
                        <th scope="col">Comarca</th>
                        <th scope="col">Tipus</th>
                        <th scope="col">Utilitat p??blica</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Esborrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ongs as $ong) 
                        <?php
                            $ut = 'No';
                            if ($ong->utilitat_publica == 1) {
                                $ut = 'S??';
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
                            <td><a href = 'modifong/{{ $ong->CIF }}'>
                                <img src="{{URL('/images/edit.png')}}" alt="" width="25" class="d-inline-block align-text-top">
                            </a></td>
                            <td><a href = 'esbong/{{ $ong->CIF }}'>
                                <img src="{{URL('/images/delete.png')}}" alt="" width="25" class="d-inline-block align-text-top">
                            </a></td>
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