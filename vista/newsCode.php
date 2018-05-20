<?php
include '../controlador/UsuarioControlador.php';

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['editor1']) && isset($_POST['editor2'])) {

        $data_editor1 = $_POST['editor1'];
        $data_editor2 = $_POST['editor2'];

        $resultado = array(
            "estado" => "true"
        );

        return print(json_encode($resultado));
    }
}