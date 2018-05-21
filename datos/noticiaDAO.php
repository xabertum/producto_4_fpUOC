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


    public static function saveNews ($noticia) {

        $query = "INSERT INTO noticias_test (autor, editor, titulo, subtitulo, texto, imagen
                    fechacreacion, fechamodificacion, fechapublicacion)
                    VALUES (:autor, :editor, :titulo, :subtitulo, :texto, :imagen
                    :fechacreacion, :fechamodificacion, :fechapublicacion)";

        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $_autor = $noticia->getAutor();
        $_editor = $noticia->getEditor();
        $_titulo = $noticia->getTitulo();
        $_subtitulo = $noticia->getSubtitulo();
        $_texto = $noticia->getTexto();
        $_imagen = $noticia-getImagen();
        $_fechaCreacion = $noticia->getFecha_creacion();
        $_fechaModificacion = $noticia->getFecha_modificacion();
        $_fechaPublicacion = $noticia->getFecha_publicacion();

        $resultado->bindParam(":autor", $_autor);
        $resultado->bindParam(":editor", $_editor);
        $resultado->bindParam(":titulo", $_titulo);
        $resultado->bindParam(":subtitulo", $_subtitulo);
        $resultado->bindParam(":texto", $_texto);
        $resultado->bindParam(":imagen", $_imagen);
        $resultado->bindParam(":fechacreacion", $_fechaCreacion);
        $resultado->bindParam(":fechamodificacion", $_fechaModificacion);
        $resultado->bindParam(":fechapublicacion", $_fechaPublicacion);

        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }





    }



}
