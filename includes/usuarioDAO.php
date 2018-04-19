<?php 

include 'conexion.php';
include '../entities/usuario.php';

class UsuarioDAO extends Conexion {
    
    protected static $cnx;
    
    private static function getConexion () {
        
        self::$cnx = Conexion::conectar();
    }
    
    private static function desconectar() {
        
        self::$cnx = NULL;
        
    }
    
    /**
     * 
     * Metodo que sirve para validar el login
     * 
     * @param object $usuario
     * @return boolean
     */
    public static function login($usuario) {
        
        $query = "SELECT username, rol FROM usuarios WHERE username = :username AND password = :password";
        
        self::getConexion();
        
        $resultado = self::$cnx->prepare($query);
        
        
        
        
    }
    
}