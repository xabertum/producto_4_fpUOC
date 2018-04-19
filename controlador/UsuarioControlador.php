<?php 


include '../datos/usuarioDAO.php';

class UsuarioControlador {
    
    public static function login ($usuario, $password) {
        
        $obj_usuario = new Usuario();
        $obj_usuario->setUsername($usuario);
        $obj_usuario->setPassword($password);
        
        UsuarioDAO::login($obj_usuario);
        
        
        
        
    }
    
    
    
}