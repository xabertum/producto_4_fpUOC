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

        /*$query = "INSERT INTO noticias (autor, editor, titulo, subtitulo, texto, texto_2, imagen)
                    VALUES (:autor, :editor, :titulo, :subtitulo, :texto, :texto_2, :imagen)";
        */
        $query = "UPDATE noticias SET autor = :autor, editor = :editor, titulo = :titulo, subtitulo = :subtitulo,
                    texto = :texto, texto_2 = :texto_2 WHERE id = :id_news"; 


        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $id_news = $noticia->getId_noticia();
        $_autor = $noticia->getAutor();
        $_editor = $noticia->getEditor();
        $_titulo = $noticia->getTitulo();
        $_subtitulo = $noticia->getSubtitulo();
        $_texto = $noticia->getTexto();
        $_texto2 = $noticia->getTexto_2();
    
        $resultado->bindParam(":id_news", $id_news);
        $resultado->bindParam(":autor", $_autor);
        $resultado->bindParam(":editor", $_editor);
        $resultado->bindParam(":titulo", $_titulo);
        $resultado->bindParam(":subtitulo", $_subtitulo);
        $resultado->bindParam(":texto", $_texto);
        $resultado->bindParam(":texto_2", $_texto2);
    
        if ($resultado->execute()) {
            return true;
        } else {

            return false;

        }

    }

}
