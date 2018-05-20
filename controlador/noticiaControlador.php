<?php

include_once '../datos/noticiaDAO.php';

class NoticiaControlador
{

    public static function guardarNoticia($autor, $editor, $titulo, $subTitulo,
        $texto, $imagen, $fechaCreacion, $fechaModificacion, $fechaPublicacion) {

        $obj_noticia = new Noticia();
        $obj_noticia->setAutor();
        $obj_noticia->setEditor();
        $obj_noticia->setTitulo();
        $obj_noticia->setSubtitulo();
        $obj_noticia->setTexto();
        $obj_noticia->setImagen();
        $obj_noticia->setFecha_creacion();
        $obj_noticia->setFecha_modificacion();
        $obj_noticia->setFecha_publicacion();

        return NoticiaDAO::saveNews($obj_noticia);

    }

}
