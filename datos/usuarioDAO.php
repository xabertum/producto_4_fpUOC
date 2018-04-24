<?php
include 'conexion.php';
include '../entidades/Usuario.php';

class UsuarioDAO extends Conexion
{

    protected static $cnx;

    private static function getConexion ()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar ()
    {
        self::$cnx = NULL;
    }

    /**
     *
     * Metodo que sirve para validar el login
     *
     * @param object $usuario
     * @return boolean
     */
    public static function login ($usuario)
    {
        $query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
        
        self::getConexion();
        
        $resultado = self::$cnx->prepare($query);
        
        $_usuario = $usuario->getUsername();
        $_password = $usuario->getPassword();
        
        $resultado->bindParam(":username", $_usuario);
        $resultado->bindParam(":password", $_password);
        
        $resultado->execute();
        
        if ($resultado->rowCount() > 0) {
            
            $filas = $resultado->fetch();
            if ($filas['username'] == $usuario->getUsername() &&
                    $filas['password'] == $usuario->getPassword()) {
                
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * 
     * @param object $usuario
     * @return object
     */
    public static function getUser ($usuario)
    {
        $query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
        
        self::getConexion();
        
        $resultado = self::$cnx->prepare($query);
        
        $_usuario = $usuario->getUsername();
        $_password = $usuario->getPassword();
        
        $resultado->bindParam(":username", $_usuario);
        $resultado->bindParam(":password", $_password);
        
        $resultado->execute();
        
        $filas = $resultado->fetch();
        
        $usuario = new Usuario();
        $usuario->setId($filas["id"]);
        $usuario->setNombre($filas["nombre"]);
        $usuario->setRol($filas["rol"]);
        $usuario->setUsername($filas["username"]);
        
        return $usuario;
        
    }
    
    
    
}