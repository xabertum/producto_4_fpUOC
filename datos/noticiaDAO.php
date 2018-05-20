<?php

include_once 'conexion.php';
include_once '../entidades/Noticia.php';

class NoticiaDAO extends Conexion
{

    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

}
