<?php
include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if (isset($_POST["usuario"]) && isset($_POST["password"])) {
        
        $txtUsuario = validar_campo($_POST['usuario']);
        $txtPassword = validar_campo($_POST['password']);
        
        $resultado = array(
                "estado" => "true"
        );
        
        if (UsuarioControlador::login($txtUsuario, $txtPassword)) {
            //return print(json_encode($resultado));
            
            $usuario = UsuarioControlador::getUser($usuario, $password);
            
            echo $usuario->getNombre();
            
        }
    }
}
$resultado = array(
        "estado" => "false"
);
return print(json_encode($resultado)); 

