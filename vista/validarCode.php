<?php

include '../controlador/UsuarioControlador.php';

echo UsuarioControlador::login('edito', 1234);


if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    
    $txtUsuario = $_POST["usuario"];
    $txtPassword = $_POST["password"];
    
    if (UsuarioControlador::login($txtUsuario, $txtPassword)) {
        echo ("logeado");
        
        echo $txtUsuario;
        echo $txtPassword;
    }
}

//echo "no encontrado";

