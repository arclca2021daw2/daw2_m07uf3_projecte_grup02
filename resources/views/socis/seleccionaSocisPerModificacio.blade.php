<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Selecciona Soci a modficar</title>
    </head>
    <body>
        @if(\Session::has('Exit'))
            <div class="alert alert-success">
                <p>{{\Session::get('Exit')}}</p>
            </div>
        @endif
        <table border = "1">
            <tr>
                <td>NIF</td>
                <td>nom_cognoms </td>
                <td>adresa </td>
                <td>Poblacio </td>
                <td>Comarca</td>
                <td>tel_fixe</td>
                <td>tel_mobil</td>
                <td>email</td>
                <td>data_alta</td>
                <td>quota_mensual</td>
                <td>aportacio_anual</td>
            </tr>
            @foreach ($socis as $soci) 
                <tr>
                    <td>{{ $soci->NIF}}</td>
                    <td>{{ $soci->nom_cognoms}}</td>
                    <td>{{ $soci->adresa}}</td>
                    <td>{{ $soci->poblacio}}</td>
                    <td>{{ $soci->comarca}}</td>
                    <td>{{ $soci->tel_fixe}}</td>
                    <td>{{ $soci->tel_mobil}}</td>
                    <td>{{ $soci->email}}</td>
                    <td>{{ $soci->data_alta}}</td>
                    <td>{{ $soci->quota_mensual}}</td>
                    <td>{{ $soci->aportacio_anual}}</td>
                    <td><a href = 'modifsoci/{{ $soci->NIF }}'>Selecciona per modificació</a></td>               
                </tr>
            @endforeach
        </table>
    </body>
</html>