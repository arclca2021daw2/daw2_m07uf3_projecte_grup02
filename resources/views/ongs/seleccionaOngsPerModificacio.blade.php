<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Selecciona ONG a modficar</title>
    </head>
    <body>
        @if(\Session::has('Exit'))
            <div class="alert alert-success">
                <p>{{\Session::get('Exit')}}</p>
            </div>
        @endif
        <table border = "1">
            <tr>
                <td>CIF</td>
                <td>Nom </td>
                <td>adresa </td>
                <td>Poblacio </td>
                <td>Comarca</td>
                <td>Tipus</td>
                <td>utilitat_publica</td>
            </tr>
            @foreach ($ongs as $ong) 
                <tr>
                    <td>{{ $ong->CIF}}</td>
                    <td>{{ $ong->nom}}</td>
                    <td>{{ $ong->adresa}}</td>
                    <td>{{ $ong->poblacio}}</td>
                    <td>{{ $ong->comarca}}</td>
                    <td>{{ $ong->tipus}}</td>
                    <td>{{ $ong->utilitat_publica}}</td>
                    <td><a href = 'modifong/{{ $ong->CIF }}'>Selecciona per modificació</a></td>               
                </tr>
            @endforeach
        </table>
    </body>
</html>