<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado de Usuarios</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
    </head>
    <body>


        <div style="width: 90%; margin: 0px auto; margin-top: 30px;">
            <?php
            require_once '../../config.php';
            $puente = new config();
            $conn = $puente->Conectar_BD();
            $query = oci_parse($conn, 'SELECT * FROM usuarios  ');
            if (!$query) {
                $e = oci_error($conn);
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }  ?>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    OCIExecute($query, OCI_DEFAULT);
                    $c=0;
                    while (OCIFetch($query)) {
                     $c=$c+1;
                        ?>
                        <tr>
                            <td><?php echo $c; ?></td>
                            <td><?php echo ociresult($query, "ID"); ?></td>
                            <td><?php echo ociresult($query, "CONTRASENA"); ?></td>
                            <td><?php echo ociresult($query, "NOMBRES"); ?></td>
                        </tr>
                    <?php
                    }

                    OCICommit($conn);
                    OCILogoff($conn);
                    ?>
                </tbody>
            </table>
            
            
            <button class="btn btn-success" onclick="javascript:history.go(-1);">Atr&aacute;s</button>
        </div>

    </body>
</html>