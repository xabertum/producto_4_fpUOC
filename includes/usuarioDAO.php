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
    
    
    public static function login($usuario) {
        
    }
    
}