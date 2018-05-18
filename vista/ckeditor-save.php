<?php

include_once '/datos/conexion.php';

if (isset($_POST['editabledata'])) {

    $query = "INSERT INTO noticias_test (id, test) VALUES ('',:editabledata)";

    self::getConexion();

    $resultado = self::$cnx->prepare($query);

    $data = $_POST['editabledata'];

    $resultado->bindParam(":editabledata", $data);
    $resultado->execute();

    if ($resultado->execute()) {
        return true;
    } else {

        return false;

    }

}
