<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Escriu dades noves de socis</title>
    </head>
    <body>
        <form action = "/modifsocis/<?php echo $socis[0]->NIF; ?>" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <table>
                <tr>
                    <td>NIF</td>
                    <td>
                        <input type = 'text' name = 'NIF'
                        value = '<?php echo$socis[0]->NIF; ?>'/>
                    </td>
                </tr>

                <tr>
                    <td>nom_cognoms</td>
                    <td>
                        <input type = 'text' name = 'nom_cognoms'
                        value = '<?php echo$socis[0]->nom_cognoms; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>adresa</td>
                    <td>
                        <input type = 'text' name = 'adresa'
                        value = '<?php echo$socis[0]->adresa; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>poblacio</td>
                    <td>
                        <input type = 'text' name = 'poblacio'
                        value = '<?php echo$socis[0]->poblacio; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>comarca</td>
                    <td>
                        <input type = 'text' name = 'comarca'
                        value = '<?php echo$socis[0]->comarca; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>tel_fixe</td>
                    <td>
                        <input type = 'text' name = 'tel_fixe'
                        value = '<?php echo$socis[0]->tel_fixe; ?>'/>
                    </td>
                </tr>
                
                <tr>
                    <td>tel_mobil</td>
                    <td>
                        <input type = 'text' name = 'tel_mobil'
                        value = '<?php echo$socis[0]->tel_mobil; ?>'/>
                    </td>
                </tr>

                <tr>
                    <td>email</td>
                    <td>
                        <input type = 'text' name = 'email'
                        value = '<?php echo$socis[0]->email; ?>'/>
                    </td>
                </tr>

                <tr>
                    <td>data_alta</td>
                    <td>
                        <input type = 'text' name = 'data_alta'
                        value = '<?php echo$socis[0]->data_alta; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>quota_mensual</td>
                    <td>
                        <input type = 'text' name = 'quota_mensual'
                        value = '<?php echo$socis[0]->quota_mensual; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>aportacio_anual</td>
                    <td>
                        <input type = 'text' name = 'aportacio_anual'
                        value = '<?php echo$socis[0]->aportacio_anual; ?>'/>
                    </td>
                </tr>
               <tr>
                    <td colspan = '2'>
                        <input type = 'submit' value = "Actualitza Soci" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html><?php /**PATH /var/www/html/ongs/resources/views/socis/dadesModificacioSocis.blade.php ENDPATH**/ ?>