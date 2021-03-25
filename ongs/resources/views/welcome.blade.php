<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App ONGS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
        <style>
            #user {
                height: 30px;
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
                        <a class="nav-link active" href="#">Inici</a>
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
                    @if(\Session::has('admin'))
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" aria-disabled="true">Usuaris</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="tancarsessio/{{ \Session::get('usuari') }}">
                        Tancar Sessió
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        
        <h1>LOGO</h1>         
    </body>
</html>
