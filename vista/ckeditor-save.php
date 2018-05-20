<?php

include_once '../datos/conexion.php';

$query = "INSERT INTO noticias_test (id, test) VALUES ('',:editabledata)";

$cnx = Conexion::conectar();

$resultado = $cnx->prepare($query);

$data = $_POST['editabledata'];

var_dump($data);

$resultado->bindParam(":editabledata", $data);
$resultado->execute();

var_dump($resultado);

if ($resultado->execute()) {
    echo true;
} else {

    echo false;

}
