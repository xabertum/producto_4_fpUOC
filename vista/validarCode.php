<?php
include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if (isset($_POST["usuario"]) && isset($_POST["password"])) {
        
        $txtUsuario = $_POST['usuario'];
        $txtPassword = $_POST['password'];
        
        $resultado = array(
                "estado" => "true"
        );
        
        if (UsuarioControlador::login($txtUsuario, $txtPassword)) {
            return print(json_encode($resultado));
        }
    }
}
$resultado = array(
        "estado" => "false"
);
return print(json_encode($resultado)); 

