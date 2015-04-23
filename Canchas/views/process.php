<?php

  require_once '../../Usuarios/Model/model.php';
$model = new model();
$op = $_GET["c"];
if ($op == 1) {

    $nombre = $_POST["nombres"];
    $correo = $_POST["email"];
    $direccion = $_POST["direccion"];
    $model->Registrar_Cancha($nombre, $direccion, $correo);
}

?>