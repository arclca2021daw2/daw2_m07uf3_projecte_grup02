<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Escriu dades noves de l'ong</title>
    </head>
    <body>
        <form action = "/modifongs/<?php echo $ongs[0]->CIF; ?>" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <table>
                <tr>
                    <td>CIF</td>
                    <td>
                        <input type = 'text' name = 'CIF'
                        value = '<?php echo$ongs[0]->CIF; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td>
                    <input type = 'text' name = 'nom'
                    value = '<?php echo$ongs[0]->nom; ?>'/>
                    </td>
                </tr>
                <tr>
                <td>Adresa</td>
                    <td>
                    <input type = 'text' name = 'adresa'
                    value = '<?php echo$ongs[0]->adresa; ?>'/>
                    </td>
                </tr>
                <tr>
                <tr>
                <td>Poblacio</td>
                    <td>
                    <input type = 'text' name = 'poblacio'
                    value = '<?php echo$ongs[0]->poblacio; ?>'/>
                    </td>
                </tr>
                <tr>
                <td>Comarca</td>
                    <td>
                    <input type = 'text' name = 'comarca'
                    value = '<?php echo$ongs[0]->comarca; ?>'/>
                    </td>
                </tr>
                <tr>
                <td>Tipus</td>
                    <td>
                    <input type = 'text' name = 'tipus'
                    value = '<?php echo$ongs[0]->tipus; ?>'/>
                    </td>
                </tr>
                <tr>
                <td>Utilitat Publica</td>
                    <td>
                    <input type = 'text' name = 'utilitat_publica'
                    value = '<?php echo$ongs[0]->utilitat_publica; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td colspan = '2'>
                        <input type = 'submit' value = "Actualitza ONG" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>