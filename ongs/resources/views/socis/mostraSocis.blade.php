<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Socis</title>
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

            nav {
                position: fixed !important;
                top: 0;
                width: 100%;
            }

            #primerh1 {
                margin-top: 70px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            
                <a class="navbar-brand" href="/usuaris/{{Session::get('usuari')}}">
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
                        <a class="nav-link active" href="#">Socis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('treballadors.index') }}">Treballadors</a>
                    </li>
                    @if(\Session::has('admin'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route ('usuaris.index') }}">Usuaris</a>
                        </li>
                    @endif
                    <li class="nav-item">
                    <form action = "{{ route ('login.destroy', Session::get('usuari')) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="boto nav-link" type="submit" value="Tancar Sessió" />
                    </form> 
                    </li>
                </ul>
            </div>
        </nav>
        <h1 id="primerh1">Llista socis</h1>
        @if(count($socis) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">NIF</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adreça</th>
                        <th scope="col">Població</th>
                        <th scope="col">Comarca</th>
                        <th scope="col">Fixe </th>
                        <th scope="col">Mòbil </th>
                        <th scope="col">Correu </th>
                        <th scope="col">Data d'alta </th>
                        <th scope="col">Mensual </th>
                        <th scope="col">Anual</th>
                        <th scope="col">CIF ONG</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Esborrar</th>
                    </tr>
                </thead>
                </tbody>
                    @foreach ($socis as $soci) 
                        <tr>
                            <td>{{ $soci->NIF }}</td>
                            <td>{{ $soci->nom_cognoms }}</td>
                            <td>{{ $soci->adresa }}</td>
                            <td>{{ $soci->poblacio }}</td>
                            <td>{{ $soci->comarca }}</td>   
                            <td>{{ $soci->tel_fixe }}</td>      
                            <td>{{ $soci->tel_mobil }}</td>
                            <td>{{ $soci->email }}</td>
                            <td>{{ $soci->data_alta }}</td>
                            <td>{{ $soci->quota_mensual }} €</td>
                            <td>{{ $soci->aportacio_anual }} €</td>         
                            <td>{{ $soci->CIF_ONG }}</td>  
                            <td><a href = "{{ route ('socis.show', $soci->NIF)}}">
                                <img src="{{URL('/images/edit.png')}}" alt="" width="25" class="d-inline-block align-text-top">
                            </a></td>
                            <td>
                                <form action="{{route ('socis.destroy', $soci->NIF)}}" method="POST">
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
        <a class="btn btn-primary" href="{{ route ('socis.create') }}"> Afegir </a>
    </body>
</html>