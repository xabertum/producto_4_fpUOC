<?php
include 'conexion.php';
include '../entidades/Noticia.php';

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

    public static function guardarNoticia($noticia)
    {

        $query = "INSERT INTO noticias (autor, editor, titulo, subtitulo, texto, texto_2, imagen)
                    VALUES (:autor, :editor, :titulo, :subtitulo, :texto, :texto_2, :imagen)";

        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        var_dump($noticia);

        $_autor = $noticia->getAutor();
        $_editor = $noticia->getEditor();
        $_titulo = $noticia->getTitulo();
        $_subtitulo = $noticia->getSubtitulo();
        $_texto = $noticia->getTexto();
        $_texto2 = $noticia->getTexto_2();
        $_imagen = $noticia->getImagen();       

        $resultado->bindParam(":autor", $_autor);
        $resultado->bindParam(":editor", $_editor);
        $resultado->bindParam(":titulo", $_titulo);
        $resultado->bindParam(":subtitulo", $_subtitulo);
        $resultado->bindParam(":texto", $_texto);
        $resultado->bindParam(":texto_2", $_texto2);
        $resultado->bindParam(":imagen", $_imagen);
        
        /*
        $resultado->bindParam(":fechacreacion", $_fechaCreacion);
        $resultado->bindParam(":fechamodificacion", $_fechaModificacion);
        $resultado->bindParam(":fechapublicacion", $_fechaPublicacion);
         */
        var_dump($resultado->execute());
        print $resultado->errorCode();

        if ($resultado->execute()) {
            return true;
        } else {

            return false;

        }

    }

}
