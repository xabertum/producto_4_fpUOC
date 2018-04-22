<?php
include '../controlador/UsuarioControlador.php';

if (isset($_POST["usuario"]) && isset($_POST["password"])) {
        
    $txtUsuario = $_POST['usuario'];
    $txtPassword = $_POST['password'];
    
    if (UsuarioControlador::login($txtUsuario, $txtPassword)) {
        return print ("logeado");    
    }
}

echo "no encontrado";

