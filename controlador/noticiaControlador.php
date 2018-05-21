<?php

include '../datos/noticiaDAO.php';

class NoticiaControlador
{

    public static function guardarNoticia($autor, $editor, $titulo, $subTitulo,
        $texto, $texto_2, $imagen) {

        $obj_noticia = new Noticia();
        $obj_noticia->setAutor($autor);
        $obj_noticia->setEditor($editor);
        $obj_noticia->setTitulo($titulo);
        $obj_noticia->setSubtitulo($subTitulo);
        $obj_noticia->setTexto($texto);
        $obj_noticia->setTexto_2($texto_2);
        $obj_noticia->setImagen($imagen);
       

        return NoticiaDAO::guardarNoticia($obj_noticia);

    }

}
