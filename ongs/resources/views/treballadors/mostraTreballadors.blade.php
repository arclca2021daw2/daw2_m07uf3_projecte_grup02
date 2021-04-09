<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Llista Treballadors</title>
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

            th {
                min-width: 70px;
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
        <h1>Llista treballadors voluntaris</h1>
        @if(count($treballadors_voluntaris) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">NIF</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adreça</th>
                        <th scope="col">Població</th>
                        <th scope="col">Comarca</th>
                        <th scope="col">Telèfon</th>
                        <th scope="col">Mòbil</th>
                        <th scope="col">Correu</th>
                        <th scope="col">Ingrés</th>
                        <th scope="col">CIF ONG</th>
                        <th scope="col">Edat</th>
                        <th scope="col">Professió</th>
                        <th scope="col">Hores</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Esborrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($treballadors_voluntaris as $tr_vol) 
                        <tr>
                            <td>{{ $tr_vol->NIF}}</td>
                            <td>{{ $tr_vol->nom_cognoms}}</td>
                            <td>{{ $tr_vol->adresa}}</td>
                            <td>{{ $tr_vol->poblacio}}</td>
                            <td>{{ $tr_vol->comarca}}</td>
                            <td>{{ $tr_vol->tel_fixe}}</td>
                            <td>{{ $tr_vol->tel_mobil}}</td>
                            <td>{{ $tr_vol->email}}</td>
                            <td>{{ $tr_vol->data_ingres}}</td>
                            <td>{{ $tr_vol->CIF_ong}}</td>
                            <td>{{ $tr_vol->edat}}</td>
                            <td>{{ $tr_vol->professio}}</td>
                            <td>{{ $tr_vol->hores}}</td>
                            <td><a href = "{{ route ('treballadors.show', $tr_vol->NIF)}}">
                                <img src="{{URL('/images/edit.png')}}" alt="" width="25" class="d-inline-block align-text-top">
                            </a></td>
                            <td>
                                <form action = "{{ route ('treballadors.destroy', $tr_vol->NIF) }}" method="POST">
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
        @endif
        <a class="btn btn-primary" href="{{ route ('treballadors.create', 'voluntari') }}"> Afegir </a>

            <h1>Llista treballadors professionals</h1>
        @if(count($treballadors_professionals) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">NIF</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adreça</th>
                        <th scope="col">Població</th>
                        <th scope="col">Comarca</th>
                        <th scope="col">Telèfon</th>
                        <th scope="col">Mòbil</th>
                        <th scope="col">Correu</th>
                        <th scope="col">Ingrés</th>
                        <th scope="col">CIF ONG</th>
                        <th scope="col">Càrrec</th>
                        <th scope="col">S. Social</th>
                        <th scope="col">IRPF</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Esborrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($treballadors_professionals as $tr_prof) 
                        <tr>
                            <td>{{ $tr_prof->NIF}}</td>
                            <td>{{ $tr_prof->nom_cognoms}}</td>
                            <td>{{ $tr_prof->adresa}}</td>
                            <td>{{ $tr_prof->poblacio}}</td>
                            <td>{{ $tr_prof->comarca}}</td>
                            <td>{{ $tr_prof->tel_fixe}}</td>
                            <td>{{ $tr_prof->tel_mobil}}</td>
                            <td>{{ $tr_prof->email}}</td>
                            <td>{{ $tr_prof->data_ingres}}</td>
                            <td>{{ $tr_prof->CIF_ong}}</td>
                            <td>{{ $tr_prof->carrec}}</td>
                            <td>{{ $tr_prof->quantitat_SS}}</td>
                            <td>{{ $tr_prof->percentatge_irpf}}</td>
                            <td><a href = "{{ route ('treballadors.show', $tr_prof->NIF)}}">
                                <img src="{{URL('/images/edit.png')}}" alt="" width="25" class="d-inline-block align-text-top">
                            </a></td>
                            <td>
                                <form action = "{{ route ('treballadors.destroy', $tr_prof->NIF) }}" method="POST">
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
        @endif
        <a class="btn btn-primary" href="{{ route ('treballadors.create', 'professional') }}"> Afegir </a>
    </body>
</html>