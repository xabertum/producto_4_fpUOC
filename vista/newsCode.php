<?php
include '../controlador/noticiaControlador.php';

session_start();

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['editor1']) && isset($_POST['editor2'])) {

        $id_news = $_POST['id_news'];
        $autor = $_SESSION['noticias'][0]['autor'];
        $editor = $_SESSION['noticias'][0]['editor'];
        $titulo = $_POST['editor-titulo'];
        $subtitulo = $_POST['editor-subtitulo'];
        $texto = $_POST['editor1'];
        $texto2 = $_POST['editor2'];
        $imagen = "";
        
        $resultado = array(
            "estado" => "true",
        );

        if (NoticiaControlador::guardarNoticia($id_news, $autor, $editor, $titulo, $subtitulo,
            $texto, $texto2, $imagen)) {

            return print(json_encode($resultado));

        }
        
    }
}
$resultado = array(
    "estado" => "false"
);
return print(json_encode($resultado));
