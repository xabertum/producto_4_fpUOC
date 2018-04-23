<?php
include '../controlador/UsuarioControlador.php';

$resultado = array();


if (isset($_POST["usuario"]) && isset($_POST["password"])) {
        
    $txtUsuario = $_POST['usuario'];
    $txtPassword = $_POST['password'];
    
    
    $resultado = array("estado" => "true");
    
    if (UsuarioControlador::login($txtUsuario, $txtPassword)) {
        return print (json_encode($resultado));    
    }
}

$resultado = array("estado" => "false");
return print (json_encode($resultado)); 

