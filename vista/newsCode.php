<?php
include '../controlador/noticiaControlador.php';

session_start();

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['editor1']) && isset($_POST['editor2'])) {

        $autor = "prueba";
        $editor = "prueba";
        $titulo = "prueba";
        $subtitulo = "pruaba";
        $texto = $_POST['editor1'];
        $texto2 = $_POST['editor2'];
        $imagen = "";
        $fechaCreacion = "";
        $fechaModificacion = "";
        $fechaPublicacion = "";

        $resultado = array(
            "estado" => "true",
        );

        if (NoticiaControlador::guardarNoticia($autor, $editor, $titulo, $subtitulo,
            $texto, $texto2, $imagen)) {

            return print(json_encode($resultado));

        }
        
    }
}
$resultado = array(
    "estado" => "false"
);
return print(json_encode($resultado));
