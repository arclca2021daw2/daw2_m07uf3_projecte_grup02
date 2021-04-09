<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Llista Usuaris</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
        <style>
            h1 {
                text-align: center;
            }

            .boto {
                border: 0;
            }
        </style>
    </head>
    <body>
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
                        <a class="nav-link" href="{{ route ('ongs.index') }}">Associacions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" aria-disabled="true">Socis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" aria-disabled="true">Treballadors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Usuaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="tancarsessio/{{ \Session::get('usuari') }}">
                        Tancar Sessió
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1>Llista usuaris</h1>

        @if(count($usuaris) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom d'usuari</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Cognoms</th>
                        <th scope="col">Correu</th>
                        <th scope="col">Tel. Mòbil</th>
                        <th scope="col">Última entrada</th>
                        <th scope="col">Última sortida</th>
                        <th scope="col">Administrador</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Esborrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuaris as $usr) 
                        <?php
                            $adm = 'No';
                            if ($usr->administrador == 1) {
                                $adm = 'Sí';
                            }
                        ?>
                        <tr>
                            <th scope="row">{{ $loop->index+1}}</th>
                            <td>{{ $usr->nom_usuari}}</td>
                            <td>{{ $usr->nom}}</td>
                            <td>{{ $usr->cognoms}}</td>
                            <td>{{ $usr->email}}</td>
                            <td>{{ $usr->mobil}}</td>
                            <td>{{ $usr->ultima_entrada}}</td>
                            <td>{{ $usr->ultima_sortida}}</td>
                            <td><?php echo $adm ?></td>
                            <td><a href = "{{ route ('usuaris.show', $usr->nom_usuari)}}">
                                <img src="{{URL('/images/edit.png')}}" alt="" width="25" class="d-inline-block align-text-top">
                            </a></td>
                            <td>
                                <form action = "{{ route ('usuaris.destroy', $usr->nom_usuari) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="boto" type="submit">
                                        <img src="{{URL('/images/delete.png')}}" alt="" width="25" class="d-inline-block align-text-top">
                                    </button>
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route ('usuaris.create') }}"> Afegir </a>
        @endif
    </body>
</html>