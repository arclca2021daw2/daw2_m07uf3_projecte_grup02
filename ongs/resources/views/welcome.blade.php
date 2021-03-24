<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App ONGS</title>
    </head>
    <body class="antialiased">
        <div>
            <h1>App ONGS</h1>         
            <h2>Continguts</h2>
            <ul>
                <li> <a href="{{ route ('ongs.index') }}">Associacions</a></li>
            </ul>  
    </body>
</html>
